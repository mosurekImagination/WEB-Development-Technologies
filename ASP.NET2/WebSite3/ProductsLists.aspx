<%@ Page Language="C#" AutoEventWireup="true" CodeFile="ProductsLists.aspx.cs" Inherits="ProductsLists" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>SHopMart</title>
    <style type="text/css">
        
        .radioANDcheck {
            padding: 5px;
            margin: 10px;
            float:left;
        }
        .orderZone {
            text-align: right;
        }

        #radioButtons{
            width:30%;
        }
        
        .buttonZone {
            margin-top: 2px;
            padding: 2px;
            width:50%;
            margin:auto;
        }
        
        .chooseZone {
           
        }
        .container {
            width:100%;
            border:3px solid black;
            background-repeat:no-repeat;
            background-position:left;
            background-image: url('backgroundImage.png');
        }
        
        .counterZone {
            padding: 2px;
            font-family: Harrington;
        }

        #AddToCart_Button
        {
            font-family: "Agency FB";
            font-size: large;
        }

         #Order_Button:hover
        {
            border-style:inset;
            border-width:2px;
        }
        
        </style>
</head>
<body>
    <form id="form1" runat="server">
        <div class="container" ">
               <div class="orderZone" ">
                    <div class ="linkZone" ">
                            <asp:LinkButton ID="Summary_Link" onClick="onToShoppingCart" runat="server">Twój koszyk</asp:LinkButton>
                            <asp:ImageButton ID="ImageButton1" src="cartImage.png" runat="server" OnClick="onToShoppingCart" style ="width:16px;height:16px;"/>
                    </div>
                    <div class ="counterZone">
                            <asp:Label ID="ProductsAmount_Label" runat="server"></asp:Label>
                    </div>
                </div>
            
            <div class="chooseZone" style="width:50%;margin:auto;">
                
                <div class="radioANDcheck" id="radioButtons">
                    <asp:RadioButtonList ID="CategoryList" OnSelectedIndexChanged="CategoryChanged" AutoPostBack="true" runat="server"></asp:RadioButtonList>
                </div>
                <div class="radioANDcheck" id="checkButtons">
                    <asp:CheckBoxList ID="ProductsList" runat="server"></asp:CheckBoxList>
                </div>

            </div>

            <div class ="buttonZone" style="clear:both;">
                    <asp:Button ID="AddToCart_Button" runat="server" Text="Dodaj wybrane do koszyka" onClick="AddToCard"/>
            </div>
        </div>
     </form>
</body>
</html>
