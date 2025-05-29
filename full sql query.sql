CREATE DATABASE inventorydb;
USE inventorydb;
CREATE TABLE Supplier (
  supplier_id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  address TEXT,
  contact_person VARCHAR(255),
  phone_number VARCHAR(20)
);
CREATE TABLE Product (
  product_id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description TEXT,
  unit_price DECIMAL(10,2),
  quantity_available INT
);
CREATE TABLE Customer (
  customer_id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  address TEXT,
  age INT,
  phone_num VARCHAR(20)
);
CREATE TABLE Orders (
  order_id INT PRIMARY KEY,
  supplier_id INT,
  product_id INT,
  customer_id INT,
  quantity_ordered INT,
  FOREIGN KEY (supplier_id) REFERENCES Supplier(supplier_id),
  FOREIGN KEY (product_id) REFERENCES Product(product_id),
  FOREIGN KEY (customer_id) REFERENCES Customer(customer_id)
);
CREATE TABLE Shipment (
  shipment_id INT PRIMARY KEY,
  order_id INT,
  shipment_date DATE,
  estimated_date DATE,
  arrival_date DATE,
  FOREIGN KEY (order_id) REFERENCES Orders(order_id)
);
SELECT o.order_id, c.name AS customer_name, p.name AS product_name, o.quantity_ordered
FROM Orders o
JOIN Customer c ON o.customer_id = c.customer_id
JOIN Product p ON o.product_id = p.product_id
LIMIT 0, 1000;
SELECT s.shipment_id, s.shipment_date, c.name AS customer_name, p.name AS product_name
FROM Shipment s
JOIN Orders o ON s.order_id = o.order_id
JOIN Customer c ON o.customer_id = c.customer_id
JOIN Product p ON o.product_id = p.product_id;
SELECT s.name AS supplier_name, p.name AS product_name
FROM Orders o
JOIN Supplier s ON o.supplier_id = s.supplier_id
JOIN Product p ON o.product_id = p.product_id;
CREATE VIEW Active_Shipments AS
SELECT shipment_id, order_id, shipment_date, estimated_date
FROM Shipment
WHERE arrival_date IS NULL;
CREATE VIEW Customer_Orders AS
SELECT o.order_id, c.name AS customer_name, p.name AS product_name, o.quantity_ordered
FROM Orders o
JOIN Customer c ON o.customer_id = c.customer_id
JOIN Product p ON o.product_id = p.product_id;
SELECT name
FROM Customer
WHERE customer_id IN (
    SELECT customer_id
    FROM Order
    WHERE product_id IN (
        SELECT product_id
        FROM Product
        WHERE unit_price > 500
    )
);
SELECT name
FROM Customer
WHERE customer_id IN (
    SELECT customer_id
    FROM Orders
    WHERE product_id IN (
        SELECT product_id
        FROM Product
        WHERE unit_price > 500
    )
);
SELECT name, quantity_available
FROM Product
WHERE quantity_available < (
    SELECT AVG(quantity_available) FROM Product
);

SELECT * FROM product;
