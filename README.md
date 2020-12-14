# Obektler

- couriers (id, full_name, avatar)
- clients (id, full_name, avatar)
- partners (id, name, avatar)
- orders (id, total_price, no, client_id)
- order_items (id, item_id, order_id)
- countries (id, name, code)
- regions (id, name, longitude, latitude)
- address (id, street, region, address, country_id)
- routes (id, name, from_country_id, to_country_id, from_region_id, to_region_id, distance)
- tariffs (id, name, price, route_id, weight, size, max_weight, max_size)
- items (id, name)
- courier_transports (id, name, courier_id, type)
- courier_info (id, avatar, phone, email, address)
- courier_balances (id, balance)
- courier_transactions (id, price, order_id)

