<?php

    class MAILCHIMP_ECOMMERCE {

        // Connect your E-commerce Store to Mailchimp to take advantage of powerful reporting and personalization features and to learn more about your customers.
        // Use Carts to represent unfinished e-commerce transactions. This can be used to create an Abandoned Cart workflow, or to save a consumer’s shopping cart pending a successful Order.
        // Add Customers to your Store to track their orders and to view E-Commerce Data for your Mailchimp lists and campaigns. Each Customer is connected to a Mailchimp list member, so adding a Customer can also add or update a list member.
        // Orders represent successful e-commerce transactions, and this data can be used to provide more detailed campaign reports, track sales, and personalize emails to your targeted consumers, and view other e-commerce data in your Mailchimp account.
        // E-commerce items for sale in your store need to be created as Products so you can add the items to a Cart or an Order. Each Product requires at least one Product Variant.
        // Promo Rules help you create promo codes for your campaigns. Promo Rules define generic information about promo codes like expiration time, start time, amount of discount being offered etc. For a given promo rule you can define if it’s a percentage discount or a fixed amount and if it applies for the order as a whole or if it’s per item or free shipping. You can then create promo codes for this price rule. Promo codes contain the actual code that is applied at checkout along with some other information. Price Rules have one to many relationship with promo codes.

        function createCart($params) {

        }

        function createCustomer($params) {

        }

        function createProduct($params) {

        }

        function createPromo($params) {

        }

        function createPromoCode($params) {

        }

        function createStore($params) {

        }

        function deleteCart($cart_id) {

        }

        function deleteCustomer($customer_id) {

        }

        function deleteProduct($product_id) {

        }

        function deletePromo($promo_id) {

        }

        function deletePromoCode($promo_id, $code_id) {

        }

        function deleteStore($store_id) {

        }

        function editCart($cart_id, $params) {

        }

        function editCustomer($customer_id, $params) {

        }

        function editProduct($product_id, $params) {

        }

        function editPromo($promo_id, $params) {

        }

        function editPromoCode($promo_id, $code_id, $params) {

        }

        function editStore($store_id, $params) {

        }

        function getCart($cart_id) {

        }

        function getCostumer($costumer_id) {

        }

        function getProduct($product_id) {

        }

        function getPromo($promo_id) {

        }

        function getPromoCode($promo_id, $code_id) {

        }

        function getStore($store_id) {

        }

    }

?>
