using System;
using System.Collections;

public partial class Form : System.Web.UI.Page
{


    protected void Page_Load(object sender, EventArgs e)
    {

        if (IsPostBack)
        {

            Validate();

            if (IsValid)
            {
                string name_value = name.Text;
                string last_name_value = last_name.Text;
                string age_value = age.Text;
                string email_value = email.Text;
                string tel_value = tel.Text;

                outPutLabel.Text = "Dziękujemy za wypełnienie naszego formularza. <br>" +
                        "Następujące informację: <br>";
                outPutLabel.Text += String.Format("Imię: {0} {1} Nazwisko: {2} {1} Wiek: {3} {1} E-mail {4} {1} Nr tel: {5} {1}", name_value, "<br>", last_name_value, age_value, email_value, tel_value);

                outPutLabel.Visible = true;

            }

        }
   



    }
}