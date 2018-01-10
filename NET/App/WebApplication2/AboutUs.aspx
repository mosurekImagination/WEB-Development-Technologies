<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="AboutUs.aspx.cs" Inherits="WebApplication2.AboutUs" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <style type="text/css">
        .tabela {
            width: 100%;
            height: 100%;
            border-style: solid;
            border-color: #000000;
        }
        .cell {
            border: 1px solid #000000;
            width: 50%;
        }
        .auto-style1 {
            border: 1px solid #000000;
            width: 50%;
            height: 28px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div class="auto-style3">
            <table class="tabela">
                <tr>
                    <td class="cell">Nazwa</td>
                    <td class="cell">ASP example page</td>
                </tr>
                <tr>
                    <td class="cell">Autorzy</td>
                    <td class="cell">Tomek i Paweł</td>
                </tr>
                <tr>
                    <td class="auto-style1">Technologia</td>
                    <td class="auto-style1">ASP.net</td>
                </tr>
                <tr>
                    <td class="cell">Ocena</td>
                    <td class="cell">10 ? :)</td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
