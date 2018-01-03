<%@ Page Language="C#" %>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta charset="utf-8" />
    <title>Formularz</title>    
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
        .auto-style2 {
            width: 299px;
        }
        .auto-style3 {
            width: 299px;
            height: 76px;
        }
        .auto-style4 {
            height: 76px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server" style="float: none;">   
        <table align="left" cellpadding="2" cellspacing="3" class="auto-style1">
            <tr>
                <td class="auto-style2">imię</td>
                <td>
                    <asp:TextBox ID="tbxName" runat="server"></asp:TextBox>
                    <asp:TextBox ID="TextBox1" runat="server"></asp:TextBox>
                    <br />
                    <asp:RequiredFieldValidator ID="nameRequiredFieldValidator" runat="server" ControlToValidate="tbxName" Display="Dynamic" ErrorMessage="Pole puste. Proszę wpisać dane" ForeColor="Maroon"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style2">nazwisko</td>
                <td>
                    <asp:TextBox ID="tbxSecondName" runat="server"></asp:TextBox>
                    <br />
                    <asp:RequiredFieldValidator ID="socondNameRequiredFieldValidator" runat="server" ControlToValidate="tbxSecondName" Display="Dynamic" ErrorMessage="Pole puste. Proszę wpisać dane" ForeColor="Maroon"></asp:RequiredFieldValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style2">hasło</td>
                <td>
                    <asp:TextBox ID="tbxPassword" runat="server" TextMode="Password"></asp:TextBox>
                    <br />
                    <asp:RequiredFieldValidator ID="passwordRequiredFieldValidator" runat="server" ControlToValidate="tbxPassword" Display="Dynamic" ErrorMessage="Pole puste. Proszę wpisać dane" ForeColor="Maroon"></asp:RequiredFieldValidator>
                    <br />
                </td>
            </tr>
            <tr>
                <td class="auto-style3">numer telefonu</td>
                <td class="auto-style4">
                    <asp:TextBox ID="tbxPhone" runat="server"></asp:TextBox>
                    <br />
                    <asp:RequiredFieldValidator ID="phoneRequiredFieldValidator" runat="server" ControlToValidate="tbxPhone" Display="Dynamic" ErrorMessage="Pole puste. Proszę wpisać dane" ForeColor="Maroon"></asp:RequiredFieldValidator>
                    <br />
                    <asp:RegularExpressionValidator ID="phoneRegularExpressionValidator" runat="server" Display="Dynamic" ErrorMessage="wpisz poprawny nr telefonu" ForeColor="Maroon" ValidationExpression="/^(?:\(?\+?48)?(?:[-\.\(\)\s]*(\d)){9}\)?$/"></asp:RegularExpressionValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style2">E-mail</td>
                <td>
                    <asp:TextBox ID="tbxEmail" runat="server"></asp:TextBox>
                    <br />
                    <asp:RequiredFieldValidator ID="emailRequiredFieldValidator5" runat="server" ControlToValidate="tbxEmail" Display="Dynamic" ErrorMessage="Pole puste. Proszę wpisać dane" ForeColor="Maroon"></asp:RequiredFieldValidator>
                    <br />
                    <asp:RegularExpressionValidator ID="emailRegularExpressionValidator" runat="server" ControlToValidate="tbxEmail" Display="Dynamic" ErrorMessage="Wpisz adres E-mail w prawidłowym formacie" ForeColor="Maroon" ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
                </td>
            </tr>
            <tr>
                <td class="auto-style2">adres</td>
                <td>
                    <asp:TextBox ID="tbxAddress" runat="server"></asp:TextBox>
                    <br />
                </td>
            </tr>
            <tr>
                <td class="auto-style2">kod pocztowy</td>
                <td>
                    <asp:TextBox ID="tbxPostCode" runat="server"></asp:TextBox>
                    <br />
                    <asp:RequiredFieldValidator ID="postcodeRequiredFieldValidator6" runat="server" ControlToValidate="tbxPostCode" Display="Dynamic" ErrorMessage="Pole puste. Proszę wpisać dane" ForeColor="Maroon"></asp:RequiredFieldValidator>
                    <br />
                    <asp:RegularExpressionValidator ID="postcodeRegularExpressionValidator" runat="server" ControlToValidate="tbxPostCode" Display="Dynamic" ErrorMessage="Wpisz kod pocztowy w formacie XX-XXX" ForeColor="Maroon" ValidationExpression="\d{2}(-\d{3})?"></asp:RegularExpressionValidator>
                </td>
            </tr>
        </table>

            <p>
                &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>
        <p>
            &nbsp;</p>

            <asp:Button ID="Send" runat="server" Text="Wyślij" />
        <p>
            <asp:Label ID="ShowInput" runat="server" Visible="False"></asp:Label>
        </p>
    </form>
</body>
</html>
