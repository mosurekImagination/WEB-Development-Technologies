using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace WebApplication2
{
    public partial class MainPage : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Formularz_Button_Click(object sender, EventArgs e)
        {
            Server.Transfer("Form.aspx");
        }

        protected void About_Button_Click(object sender, EventArgs e)
        {
            Server.Transfer("AboutUs.aspx");
        }
    }
}