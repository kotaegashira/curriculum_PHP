/* 地方ごとの県を表示して下さい*/
SELECT a.prefecture_name, b.name FROM large_area AS a JOIN prefecture AS b ON a.large_area_id = b.large_area_id;