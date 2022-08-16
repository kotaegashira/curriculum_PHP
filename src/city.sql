/* 県ごとの区の数を表示して下さい*/
SELECT prefecture_name, count(*) FROM city JOIN large_area ON large_area.large_area_id = city.large_area_id GROUP BY large_area.prefecture_name ORDER BY large_area.large_area_id;