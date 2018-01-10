using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

/// <summary>
/// Opis podsumowujący dla Class1
/// </summary>
/// 
[Serializable]
public class Product
{
    public  String Name { get; set; }
    public double Price { get; set; }
    public int ID { get; set; }

    public Product(int ID,String name, double price)
    {
        this.ID = ID;
        this.Name = name;
        this.Price = price;
    }

    public double ShowPrice()
    {
        return Price;
    }

    public String ShowName()
    {
        return Name;
    }
}