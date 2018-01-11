using System;
using System.Collections;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class ShoppingCart : System.Web.UI.Page
{
    private Hashtable SessionContent;

    public void init()
    {
        SessionContent = (Hashtable)Session["OrderedProducts"];
        SessionContent = SessionContent == null ? new Hashtable() : SessionContent;
    }

    private double SumUpCart()
    {
        double sumUp = 0.0;
        foreach (DictionaryEntry pair in SessionContent)
        {
            List<Product> productsList = (List<Product>)pair.Value;
            sumUp += productsList.Count * productsList[0].Price;
        }
        return sumUp;
    }


    private void DynamicDataTable()
    {
        if (SessionContent.Count == 0)
        {
            Order_Button.Enabled = false;
            CartEmptyStatus.Text = "Koszyk jest pusty";
            DeliveryOptions.Visible = false;
            OrderSummary.Visible = false;
        }
        else
        {
            DataTable dt = new DataTable();
            dt.Columns.Add("Nazwa", typeof(string));
            dt.Columns.Add("Cena", typeof(string));
            dt.Columns.Add("Ilosc", typeof(int));

            foreach (DictionaryEntry pair in SessionContent)
            {
                List<Product> productsList = (List<Product>)pair.Value;
                dt.Rows.Add(productsList[0].Name, productsList[0].Price + " zł", productsList.Count);
            }
            GridView1.DataSource = dt;
            GridView1.DataBind();
        }
    }

    private double getDeliveryOptionPrice()
    {
        ListItem chosenDeliveryOption = DeliveryOptions.SelectedItem;
        return  chosenDeliveryOption != null ? double.Parse(chosenDeliveryOption.Value) : 0.0;
    }

    protected void OnSelectedIndexChanged(object sender, EventArgs e)
    {
        setOrderSummaryText();
    }

    private void setOrderSummaryText()
    {

        double value = getDeliveryOptionPrice() + SumUpCart();
        OrderSummary.Text = "Do zapłaty :  <b>" + value + "</b> zł";
    }


    protected void onProductsListPageRedirect(object sender, EventArgs e)
    {
        Response.Redirect("ProductsLists.aspx");
    }

    protected void BtnOrder_Click(object sender, EventArgs e)
    {
        double orderPrice = getDeliveryOptionPrice() + SumUpCart();
        Session["OrderPrice"] = CartIsEmpty() ? 0 : orderPrice;
        Response.Redirect("Order.aspx");
        
    }
    private Boolean CartIsEmpty()
    {
        return SessionContent.Count == 0;
    }
    protected void Page_Load(object sender, EventArgs e)
    {
        init();
        DynamicDataTable();
        setOrderSummaryText();
    }
}