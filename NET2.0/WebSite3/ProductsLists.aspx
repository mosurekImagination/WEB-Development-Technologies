<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ProductsLists.aspx.cs" Inherits="ProductsLists" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <asp:RadioButtonList ID="CategoryList" OnSelectedIndexChanged="CategoryChanged" RepeatDirection="Horizontal" AutoPostBack="true" runat="server"></asp:RadioButtonList>
            <asp:CheckBoxList ID="ProductsList" runat="server"></asp:CheckBoxList>
            <asp:Label ID="LBProductsAmount" runat="server"></asp:Label>
            <asp:LinkButton ID="LinkToSummary" onClick="onRedirectToShoppingCart" runat="server">Link do koszyka</asp:LinkButton>
            <asp:Button ID="BtnAddToCart" runat="server" Text="Dodaj do koszyka" onClick="AddToCard"/>
        </div>
    </form>
</body>
</html>
