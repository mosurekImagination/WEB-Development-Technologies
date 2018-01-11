using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Order : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        OrderPriceInit();
        if (CartIsEmpty())
        {
            ShowEmptyCartMessage();
        } else
        {
            ShowOrderSummaryMessage();
            ClearCart();

        }
    }

    private Boolean CartIsEmpty()
    {
        return Session["OrderedProducts"] == null || ((Hashtable)Session["OrderedProducts"]).Count == 0;
    }

    private void ShowEmptyCartMessage()
    {
        Thanks_Message.Visible = false;
        Total_Price_Message.Text = "Pusty koszyk. Nic nie zostało zamówione";
    }

    private void ShowOrderSummaryMessage()
    {
        Total_Price_Message.Text = "Kwota do zapłaty: <b> " + (double)Session["OrderPrice"] + "</b>";
    }
    private void OrderPriceInit()
    {
        Session["OrderPrice"] = Session["OrderPrice"] == null ? 0 : Session["OrderPrice"];
    }

    private void ClearCart()
    {
        Session["OrderPrice"] = null;
        Session["OrderedProducts"] = null;
    }
}