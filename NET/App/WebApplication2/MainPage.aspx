<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="MainPage.aspx.cs" Inherits="WebApplication2.MainPage" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <style type="text/css">
        .buttons {
            font-size: x-large;
            font-weight: bold;
            font-style: oblique;
            color: #0000FF;
            height:40px;
            width:100%;
        }
    </style>
</head>
<body style="height: 100%">
    <form id="form1" runat="server">
        <div>
            <h1 style="text-align: center">This is a ASP homepage of Tomek and Pawel</h1>
        </div>
        <asp:Image ID="Obrazek" src="images/r2d2.jpg" runat="server" BorderStyle="Solid" BorderWidth="1px" Height="400px" ImageAlign="Middle" Width="100%" />
        <p style="font-family: Forte; font-size: 27px; font-style: oblique; font-weight: 100; font-variant: normal; text-transform: capitalize; color: #FF0000; line-height: normal; background-color: #FFFFFF; text-align: center;">
            Wybierz w które miejsce chcesz sie udac</p>
        <p>
            <asp:Button ID="Formularz_Button" class="buttons" runat="server" Text="Formularz" OnClick="Formularz_Button_Click" CssClass="buttons"/>
        </p>
        <p>
            <asp:Button ID="About_Button" class="buttons" runat="server" style="text-align: center" Text="O nas" OnClick="About_Button_Click" CssClass="buttons" />
        </p>
    </form>
    <p>
        &nbsp;</p>
</body>
</html>
