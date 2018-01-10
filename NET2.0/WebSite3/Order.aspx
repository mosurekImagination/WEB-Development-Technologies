<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Order.aspx.cs" Inherits="Order" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
        <div>
            <asp:Label ID="ThanksMessage" runat="server" Text="Dziękujemy za złożenie zamówienia"></asp:Label>
            <asp:Label ID="PriceMessage" runat="server"></asp:Label>
            <div>
                <asp:HyperLink ID="RedirectToProductsLists" NavigateUrl="~/ProductsLists.aspx" runat="server">Powrót do listy produktów</asp:HyperLink>
           </div>
        </div>
</body>
</html>
