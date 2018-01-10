<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Form.aspx.cs" Inherits="Form" %>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Formularz</title>
    <style type="text/css">
        .auto-style1 {
            font-size: medium;
        }
    </style>
</head>
<body>
    <form id="form2" runat="server">
        <div>
            <h2 style="font-size: x-large">Formularz</h2>
            <p class="auto-style1">
                Proszę wypełnić formularz</p>
            <p class="auto-style1">
                Imię:&nbsp;
                <asp:TextBox ID="name" runat="server"></asp:TextBox>
                
            </p>
            <p class="auto-style1">
                <asp:RequiredFieldValidator ID="NameRequiredFieldValidator" runat="server" 
                    ControlToValidate="name" Display="Dynamic" 
                    ErrorMessage="Proszę uzupełnij pole imię" ForeColor="Red"></asp:RequiredFieldValidator>
                
            </p>
            <p class="auto-style1">
                Nazwisko: <asp:TextBox ID="last_name" runat="server"></asp:TextBox>
            </p>
            <p class="auto-style1">
                <asp:RequiredFieldValidator ID="LastNameRequiredFieldValidator" runat="server" 
                    ControlToValidate="last_name" Display="Dynamic" 
                    ErrorMessage="Proszę uzupełnić pole nazwisko" ForeColor="Red"></asp:RequiredFieldValidator>
            </p>
            <p class="auto-style1">
                Wiek:&nbsp;
                <asp:TextBox ID="age" runat="server"></asp:TextBox>
            </p>
            <p class="auto-style1">
                <asp:RequiredFieldValidator ID="AgeRequiredFieldValidator" runat="server" 
                    ControlToValidate="age" Display="Dynamic" 
                    ErrorMessage="Proszę uzupełnić pole wiek" ForeColor="Red"></asp:RequiredFieldValidator>
            </p>
            <p class="auto-style1">
                <asp:RangeValidator ID="AgeRangeValidator" runat="server" 
                    ControlToValidate="age" Display="Dynamic" 
                    ErrorMessage="Należy mieć 18 lat, aby się zarejestrować" ForeColor="Red" 
                    MinimumValue="18"
                    MaximumValue="99"></asp:RangeValidator>
            </p>
            <p class="auto-style1">
                E-mail:&nbsp;
                <asp:TextBox ID="email" runat="server"></asp:TextBox>
            &nbsp;np. kasia@domain.com</p>
            <p class="auto-style1">
                <asp:RequiredFieldValidator ID="EmailRequiredFieldValidator" runat="server" 
                    ControlToValidate="email" Display="Dynamic" 
                    ErrorMessage="Proszę uzupełnić pole e-mail" ForeColor="Red"></asp:RequiredFieldValidator>
            </p>
            <p class="auto-style1">
                <asp:RegularExpressionValidator ID="EmailRegularExpressionValidator" 
                    runat="server" ControlToValidate="email" Display="Dynamic" 
                    ErrorMessage="Proszę wpisać e-mail w poprawnej formie" ForeColor="Red" 
                    ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
            </p>
            <p class="auto-style1">
                Powtórz e-mail:&nbsp; <asp:TextBox ID="email2" runat="server"></asp:TextBox>
            &nbsp;</p>
            <p class="auto-style1">
                <asp:CompareValidator ID="Email2CompareValidator" runat="server" 
                    ControlToCompare="email" ControlToValidate="email2" Display="Dynamic" 
                    ErrorMessage="Adresy e-mail nie są jednakowe" ForeColor="Red"></asp:CompareValidator>
            </p>
            <p class="auto-style1">
                Nr tel:&nbsp;
                <asp:TextBox ID="tel" runat="server"></asp:TextBox>
            &nbsp;np. (+48) 999 999 999</p>
            <p class="auto-style1">
                <asp:RegularExpressionValidator ID="TelRegularExpressionValidator" 
                    runat="server" ControlToValidate="tel" Display="Dynamic" 
                    ErrorMessage="Proszę wpisać nr telefonu w poprawnej formie" ForeColor="Red" 
                    
                    ValidationExpression="(?&lt;!\w)(\(?(\+|00)?48\)?)?[ -]?\d{3}[ -]?\d{3}[ -]?\d{3}(?!\w)"></asp:RegularExpressionValidator>
            </p>
            <p class="auto-style1">
                <asp:Button ID="submit" runat="server" Text="Prześlij" />
            </p>
            <p class="auto-style1">
                <asp:Label ID="outPutLabel" runat="server" Visible="False"></asp:Label>
            </p>
        </div>

  

    </form>
</body>
</html>
