# PHP &ndash; mySQL

##  Część A &ndash; zadania rozwiązywane z wykładowcą

### Zadanie A1 &ndash; tworzenie bazy danych
Stwórz nową bazę danych o nazwie ```exercises_db```.
Następnie napisz skrypt PHP, który stworzy połączenie do tej bazy danych.

### Zadanie A2 &ndash; tworzenie tabel z danymi
W bazie danych o nazwie ```exercises_db``` stwórz następujące tabele:
* Product:
  * id: int
  * name: string
  * description: string
* Order:
  * id:int
  * description: string
* Client:
  * id: int
  * name: string
  * surname: string

### Zadanie A3 &ndash; wpisywanie danych
Napisz zapytania SQL, żeby wypełnić każdą tabelę co najmniej kilkoma wpisami. Napisz formularz, który będzie dodawał nowe produkty do bazy danych.

### Zadanie A4 &ndash; wypisywanie danych
Napisz stronę, która wyświetli wszystkie produkty znajdujące się w bazie danych.

### Zadanie A5 &ndash; usuwanie danych
Napisz stronę, która usunie produkt o podanym **id** (**id** może być zmienną w kodzie).

## Zadania rozwiązywane samodzielnie

### Zadanie B1 &ndash; tworzenie bazy danych
Stwórz nową bazę danych o nazwie ```cinemas_db```. Kod MySQL zapisz jako komentarz w pliku **exercise1.php**.
Następnie napisz skrypt PHP, który stworzy połączenie do tej bazy danych.

### Zadanie B2 &ndash; tworzenie tabel z danymi
W bazie danych o nazwie ```cinemas_db``` stwórz następujące tabele:
* Kino:
  * id: int
  * name: string
  * address: string
* Film:
  * id: int
  * name: string
  * opis: string
* Bilet:
  * id: int
  * ilość: int
  * cena: float
* Płatność:
  * id: int
  * typ: string
  * data: date

1. Załóż odpowiednie atrybuty na pola (np. każde **id** powinno być kluczem głównym, być automatycznie numerowane).
2. Napisz odpowiednie zapytania SQL, używając phpMyAdmin (lub konsoli).
3. W pliku **exercise2.php** napisz skrypt, który będzie tworzył bazę danych (pamiętaj o stworzeniu i zamknięciu połączenia).
4. Jeżeli tabela już istnieje, to nie da się jej stworzyć.
5. Dokładnie czytaj kody błędów zwracane przez MySQL.

**Polecenie dodatkowe**
Dodaj do tabeli ``Film`` kolumnę trzymającą rating danego filmu (wartość numeryczna z dwoma miejscami po przecinku). Zapytanie dopisz na górze pliku **exercise2.php**.

### Zadanie B3 &ndash; wpisywanie danych
Napisz zapytania SQL, żeby wypełnić każdą tabelę co najmniej kilkoma wpisami (dodaj je jako komentarz na górze pliku PHP).

1. W pliku **exercise3.php** jest formularz służący do tworzenia nowych wpisów w tablicach. Przeanalizuj kod HTML.
2. Napisz kod **PHP**, który będzie wkładał przesyłane informacje do odpowiednich tabel w MySQL. Zauważ, że możesz rozróżniać, który formularz został wysłany, dzięki temu że pola submit o nazwie ```submit``` mają różne wartości dla każdego formularza (hint: użyj switch).

Jeżeli chcesz przeczytać o innych sposobach rozróżniania wielu formularzy na jednej stronie zajrzyj [tutaj][ref-multiple-forms].
Przeprowadź też dodatkową walidację danych:
* Dla `Filmu` rating musi być w zakresie od **0.00** do **10.00**.
* Dla `Biletu` cena musi być większa niż **0**.
* Dla `Płatności` typ musi być jednym z podanych napisów:
  * Karta,
  * Gotówka,
  * Przelew.

### Zadanie B4 &ndash; wypisywanie danych
Napisz zapytania SQL, które:
* Wybiorą wszystkie filmy na literę W.
* Wybiorą wszystkie bilety, których cena jest większa niż 15.30.
* Wybiorą wszystkie bilety, których ilość (liczba) jest większa niż trzy.
* Wybiorą wszystkie filmy, które mają rating większy niż **6.5**.

Wszystkie zapytania dodaj do pliku **php** jako komentarz.

Napisz skrypt, który wyświetli na stronie wszystkie filmy, kina, bilety i płatności.

### Zadanie B5 &ndash; usuwanie danych
Napisz zapytanie, które usunie:
* wszystkie kina, których ostatnia litera nazwy to Z,
* Wszystkie płatności starsze niż pięć dni.

Wszystkie zapytania dodaj do pliku **php** jako komentarz.

Do skryptu z zadania 4. dopisz link (widoczny przy każdym elemencie wczytanym z bazy danych), który usunie ten wpis z bazy.
Zrób to na zasadzie przesyłania GET-em do innego pliku nazwy tablicy i **id** elementu, który chcesz usunąć.

## Praca domowa
Złóż całą pracę z dzisiejszych ćwiczeń w całość i stwórz miniportal, w którym:
* Możemy dodać/usuwać kina, filmy, bilety i płatności.
* Możemy wyświetlać wszystkie kina, wyszukiwać je po nazwie.
* Możemy wyświetlać wszystkie filmy, wyszukiwać je po nazwie lub ratingu.
* Możemy wyświetlać wszystkie płatności, wyszukiwać je po dacie (uwzględnij wyszukiwanie starszych niż/nowszych niż/z danego zakresu/z danej daty).

<!-- Links -->
[ref-multiple-forms]: http://stackoverflow.com/a/14071321
