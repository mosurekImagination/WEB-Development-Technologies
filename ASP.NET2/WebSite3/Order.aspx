<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Order.aspx.cs" Inherits="Order" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
</head>
<body>
        <div>
           <p>
               <asp:Label ID="Thanks_Message" runat="server" Text="Zamówienie zostało złożone i zostanie wysłane w najbliższym czasie, prosimy o ciepliwość"></asp:Label>
           </p> 
            <p>
               <asp:Label ID="Total_Price_Message" runat="server"></asp:Label>
           </p> 
            <div>
                <asp:HyperLink ID="RedirectToProductsLists" NavigateUrl="~/ProductsLists.aspx" runat="server">Powrót do listy produktów</asp:HyperLink>
           </div>
        </div>
</body>
</html>
