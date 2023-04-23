-- Wyświetlanie wszystkich produtków
select * from produkty;

-- Wyświetlanie 3 losowych produktów
select * from produkty as r1
join (select id_produktu from produkty order by rand() limit 3)
as r2 on r1.id_produktu=r2.id_produktu;

-- Historia zamówień

SELECT historie_zamowien.id_zamowienia, produkty.tytul, historie_zamowien.data_zamowienia, historie_zamowien.cena, historie_zamowien.status
FROM historie_zamowien JOIN produkty
ON historie_zamowien.id_produktu = produkty.id_produktu
WHERE id_klienta = $user_id;