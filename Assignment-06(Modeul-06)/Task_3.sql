SELECT
    c.category_name,
    SUM(oi.quantity * oi.unit_price) AS total_revenue
FROM
    Categories c
LEFT JOIN
    Products p ON c.category_id = p.category_id
LEFT JOIN
    Order_Items oi ON p.product_id = oi.product_id
GROUP BY
    c.category_name
ORDER BY
    total_revenue DESC;