using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace WebApplication2
{
    public partial class Form : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if(IsPostBack)
            {
                Validate();

                if(IsValid)
                {
                    string name = tbxName.Text;
                    string email = tbxEmail.Text;
                    string phone = tbxPhone.Text;
                    string password = tbxPassword.Text;
                    string address = tbxAddress.Text;
                    string secondName = tbxSecondName.Text;
                    string postCode = tbxPostCode.Text;
                    string age = tbxAge.Text;

                    outputLabel.Text = "Dziękujemy za rejestrację </br>" +
                        "Otrzymaliśmy następujące informacje: </br>";

                    outputLabel.Text +=
                        String.Format(" Imię: {1}{0} Nazwisko: {2}{0} Hasło: {3}{0} Nr telefonu: {4}{0} Email: {5}{0} Adres: {6}{0} Kod pocztowy: {7}{0} Wiek: {8}{0}"
                        , "</br>", name, secondName, password, phone, email, address, postCode, age);

                    outputLabel.Visible = true;
                }
            }
        }
    }
}