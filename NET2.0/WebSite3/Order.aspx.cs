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
        ThanksMessage.Visible = false;
        PriceMessage.Text = "Pusty koszyk. Nic nie zostało zamówione";
    }

    private void ShowOrderSummaryMessage()
    {
        PriceMessage.Text = "Kwota do zapłaty: " + (double)Session["OrderPrice"];
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