-- Wyświetlanie wszystkich produtków
select * from produkty;

-- Wyświetlanie 3 losowych produktów
select * from produkty as r1
join (select id_produktu from produkty order by rand() limit 3)
as r2 on r1.id_produktu=r2.id_produktu;