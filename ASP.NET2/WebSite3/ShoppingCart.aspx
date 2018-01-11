<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ShoppingCart.aspx.cs" Inherits="ShoppingCart" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <style type="text/css">
        .orderButtonZone {
            float:right;
        }
        #Order_Button
        {
            font-family: "Agency FB";
            font-size: xx-large;
        }
        #Order_Button:hover
        {
            border-style:inset;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div style="width:70%; margin:auto;">
            <asp:Label ID="Label1" runat="server"></asp:Label>
            <div style="float:left;">
                <asp:GridView ID="GridView1" runat="server"></asp:GridView>
            </div>
            <div style="float:left; margin-left:40px;">
                <asp:DropDownList ID="DeliveryOptions" OnSelectedIndexChanged="OnSelectedIndexChanged" AutoPostBack="true" runat="server">
                    <asp:ListItem Text="Sposób dostawy..." Selected="true" Value="0"></asp:ListItem>
                    <asp:ListItem Value="3,99" Text="Pan Mieciu na rowerze 3.99 lub wino"  ></asp:ListItem>
                    <asp:ListItem Value="5" Text="Ukochana poczta polska 5 zł"  ></asp:ListItem>
                    <asp:ListItem Value="7,5" Text="Kurier dpd 7.5 zł"  ></asp:ListItem>
                    <asp:ListItem Value="190" Text="SpaceX 190zł"  ></asp:ListItem>
                    <asp:ListItem Value="10" Text="Random? 10zł"  ></asp:ListItem>
                </asp:DropDownList>
            </div>
            <div style =" text-align:center; clear:both;">
                <asp:Label ID="CartEmptyStatus" runat="server"></asp:Label>
           </div>
            <div style="text-align:center;">
             
                <asp:Label ID="OrderSummary" runat="server"></asp:Label>
           </div>
            <div class="orderButtonZone">
                <asp:Button ID="Order_Button" runat="server" Text="Zamów" onClick="BtnOrder_Click" Height="72px" Width="241px"/>
            </div>
            <div style="clear:both;"></div>
            <div style="float:right;">
                <asp:HyperLink ID="RedirectToProductsLists" NavigateUrl="~/ProductsLists.aspx" runat="server">Powrót do listy produktów</asp:HyperLink>
           </div>
            
        </div>
    </form>
</body>
</html>
