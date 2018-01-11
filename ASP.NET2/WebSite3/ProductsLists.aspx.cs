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

    void InitProducts()
    {
        products = new Hashtable();
        List<Product> p1 = new List<Product>();
        List<Product> p2 = new List<Product>();
        List<Product> p3 = new List<Product>();
        List<Product> p4 = new List<Product>();
        List<Product> p5 = new List<Product>();

        products.Add(0, p1);
        products.Add(1, p2);
        products.Add(2, p3);
        products.Add(3, p4);
        products.Add(4, p5);

        p1.Add(new Product(0, "Lizak" , 2.99 ));
        p1.Add(new Product( 1, "Ciastko", 3.21 ));
        p1.Add(new Product( 2, "Cukierek" , 4.15 ));
        p1.Add(new Product( 3, "Guma" , 0.5 ));

        p2.Add(new Product( 4, "Wycieraczka" , 10.00));
        p2.Add(new Product( 5, "Obrotomierz", 55.88));
        p2.Add(new Product( 6, "Pompka", 17.19));
        p2.Add(new Product( 7, "Lusterko" , 23.99 ));
        p2.Add(new Product( 8, "Igła" , 0.11));

        p3.Add(new Product( 9,"Ziemniaki", 0.99));
        p3.Add(new Product( 10, "Frytki" , 5.00));

        p4.Add(new Product( 11, "Amelinium", 11.11));
        p4.Add(new Product(12, "Metal" , 21.37));
        p4.Add(new Product(13, "Szkorbut", 1000000.99 ));

        p5.Add(new Product(14, "Wino" , 9.99 ));
        p5.Add(new Product(15, "Wódka" , 19.99 ));
        p5.Add(new Product(16, "Rum", 35.99));
        p5.Add(new Product(17, "Piwo", 2.99));
        p5.Add(new Product(18, "Bimber", 17.99));
       
    }

    protected void bindradiobuttonlist()
    {
        Hashtable ht = new Hashtable();
        ht.Add("Słodycze", 0);
        ht.Add("Do samochodu", 1);
        ht.Add("Ziemniaki", 2);
        ht.Add("Różności", 3);
        ht.Add("%%%", 4);
        CategoryList.DataSource = ht;
        CategoryList.DataTextField = "Key";
        CategoryList.DataValueField = "Value";
        CategoryList.DataBind();
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
            int count = countOrderedProducts();
            if(count == 0)
            {
                ProductsAmount_Label.Text = "Brak produktów w koszyku";
            }
            else
            {
                ProductsAmount_Label.Text = "W Koszyku znajduje się<b> " + count + " </b>produktów";
            }
            
        }
    }

    private int countOrderedProducts()
    {
        int countedOrderedProducts = 0;
        foreach (DictionaryEntry pair in OrderedProducts)
        {
            countedOrderedProducts += ((List<Product>)pair.Value).Count;
        }
        return countedOrderedProducts;
    }

    protected void onToShoppingCart(object sender, EventArgs e)
    {
        Session["OrderedProducts"] = OrderedProducts;
        Response.Redirect("ShoppingCart.aspx");
    }

    protected void Page_Load(object sender, EventArgs e)
    {
        if(!IsPostBack)
        {
            bindradiobuttonlist();
        }
        
        InitProducts();
        int productCount = countOrderedProducts();
        ProductsAmount_Label.Text = productCount == 0 ? "Brak produktów w koszyku" : "W Koszyku znajduje się " + productCount;
    }

}