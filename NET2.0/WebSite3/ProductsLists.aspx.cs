using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class ProductsLists : System.Web.UI.Page
{
    private Hashtable products;
    private Hashtable OrderedProducts {
        get
        {
            if (Session["OrderedProducts"] != null)
            {
                ViewState["OrderedProducts"] = Session["OrderedProducts"];
            }
            else
            {
                if (ViewState["OrderedProducts"] == null)
                {
                    ViewState["OrderedProducts"] = new Hashtable();
                }
            }
            return (Hashtable)ViewState["OrderedProducts"];
        }
        set
        {
            ViewState["OrderedProducts"] = value;
        }
    }

    void InitProduct()
    {
        products = new Hashtable();
        List<Product> pro1 = new List<Product>();
        List<Product> pro2 = new List<Product>();
        List<Product> pro3 = new List<Product>();
        List<Product> pro4 = new List<Product>();
        List<Product> pro5 = new List<Product>();

        products.Add(0, pro1);
        products.Add(1, pro2);
        products.Add(2, pro3);
        products.Add(3, pro4);
        products.Add(4, pro5);

        pro1.Add(new Product(0,"Chinosy", 120.50));
        pro1.Add(new Product(1,"Spodnie materialowe", 220.56));
        pro1.Add(new Product(2,"Szorty", 45.20));
        pro1.Add(new Product(3,"Legginsy", 65.60));
        pro1.Add(new Product(4,"Spodnie materialowe", 170.45));

        pro2.Add(new Product(5,"Sukienka letnia", 210.20));
        pro2.Add(new Product(6,"Sukienka koktajlowa", 110.00));
        pro2.Add(new Product(7,"Sukienka etiu", 340.35));
        pro2.Add(new Product(8,"sukienka czarna", 120.45));
        pro2.Add(new Product(9,"Sukienka biała", 123.45));

        pro3.Add(new Product(10,"T-shirt", 50.67));
        pro3.Add(new Product(11,"Polo", 56.04));

        pro4.Add(new Product(12,"Skórzana", 550.60));
        pro4.Add(new Product(13,"Bombka", 234.56));
        pro4.Add(new Product(14,"Ołówkowa", 20.70));

        pro5.Add(new Product(15,"Outdoor", 76.99));
        pro5.Add(new Product(16,"Polarowa", 65.98));
        pro5.Add(new Product(17,"Sportowa", 67.98));
        pro5.Add(new Product(18,"Zimowa", 50.60));
    }


    protected void bindradiobuttonlist()
    {
        Hashtable ht = new Hashtable();
        ht.Add("Sukienki", 0);
        ht.Add("Spodnie", 1);
        ht.Add("Kurtki", 2);
        ht.Add("Bluzki", 3);
        ht.Add("Koszulki", 4);
        CategoryList.DataSource = ht;
        CategoryList.DataTextField = "Key";
        CategoryList.DataValueField = "Value";
        CategoryList.DataBind();
    }

    protected void Page_Load(object sender, EventArgs e)
    {
        if(!IsPostBack)
        {
            bindradiobuttonlist();
        }
        
        InitProduct();
        int productCount = countOrderedProducts();
        LBProductsAmount.Text = productCount == 0 ? "Brak produktów w koszyku" : "W Koszyku znajduje się " + productCount;
    }

    protected void CategoryChanged(object sender, EventArgs e)
    {
        int index = int.Parse(CategoryList.SelectedValue);
        ProductsList.DataSource = ((List<Product>)products[index]).Select(product => new DictionaryEntry(product.ID, product.Name + ' ' + product.Price + "zł"));
        ProductsList.DataTextField = "Value";
        ProductsList.DataValueField = "Key";
        ProductsList.DataBind();
    }

    protected void AddToCard(object sender, EventArgs e)
    {
        if (CategoryList.SelectedItem != null)
        {
            List<Product> selectedProducts = new List<Product>();
            int selectedCategory = int.Parse(CategoryList.SelectedValue);
            List<Product> selectedProductList = (List<Product>)products[selectedCategory];
            foreach (ListItem product in ProductsList.Items)
            {
                if (product.Selected)
                {
                    int selectedProductID = int.Parse(product.Value);

                    selectedProducts.Add(selectedProductList.Find(selectedProduct => selectedProduct.ID == selectedProductID));
                }
            }
            foreach (Product product in selectedProducts)
            {
                if (OrderedProducts[product.ID] == null)
                {
                    OrderedProducts.Add(product.ID, new List<Product>());
                }
                ((List<Product>)OrderedProducts[product.ID]).Add(product);
            }
            int productCount = countOrderedProducts();
            LBProductsAmount.Text = productCount == 0 ? "Brak produktów w koszyku" : "W Koszyku znajduje się " + productCount;
        }
    }


    private int countOrderedProducts()
    {
        int countedOrderedProducts = 0;
        foreach(DictionaryEntry pair in OrderedProducts)
        {
            countedOrderedProducts += ((List<Product>)pair.Value).Count;
        }
        return countedOrderedProducts;
    }

    protected void onRedirectToShoppingCart(object sender , EventArgs e)
    {
        Session["OrderedProducts"] = OrderedProducts;
        Response.Redirect("ShoppingCart.aspx");
    }
}