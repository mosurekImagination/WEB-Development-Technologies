<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ShoppingCart.aspx.cs" Inherits="ShoppingCart" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <asp:Label ID="Label1" runat="server"></asp:Label>
            <asp:GridView ID="GridView1" runat="server"></asp:GridView>
            <asp:DropDownList ID="DeliveryOptions" OnSelectedIndexChanged="OnSelectedIndexChanged" AutoPostBack="true" runat="server">
                <asp:ListItem Text="Wybierz Opcje..." Selected="true" Value="0"></asp:ListItem>
                <asp:ListItem Value="15" Text="Kurier 15 zł"  ></asp:ListItem>
                <asp:ListItem Value="5" Text="Paczka Pocztą 5 zł"  ></asp:ListItem>
                <asp:ListItem Value="7,5" Text="Paczkomat InPost 7,50 zł"  ></asp:ListItem>
            </asp:DropDownList>
            <div>
                <asp:Label ID="CartEmptyStatus" runat="server"></asp:Label>
                <asp:Label ID="OrderSummary" runat="server"></asp:Label>
           </div>
            <asp:Button ID="BtnOrder" runat="server" Text="Zamów" onClick="BtnOrder_Click"/>
            <div>
                <asp:HyperLink ID="RedirectToProductsLists" NavigateUrl="~/ProductsLists.aspx" runat="server">Powrót do listy produktów</asp:HyperLink>
           </div>
        </div>
    </form>
</body>
</html>
