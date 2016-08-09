# PHP &ndash; zadania
# MySQL

## Część A &ndash; zadania rozwiązywane z wykładowcą

### Zadanie A1 &ndash; relacja jeden do jednego
Stwórz nową tabelę ```UserAddress``` zawierającą:
* city: string
* street: string
* house_nr: string

Tabela ```UserAddress``` ma być połączona relacją jeden do jednego z tabelą ```Users```. Napisz kilka zapytań SQL, które wprowadzą adresy dla istniejących już użytkowników.

### Zadanie A2 &ndash; relacja jeden do wielu
Stwórz nową tabelę ```Opinions``` zawierającą:
* description: string

Tabela ```Opinions``` ma być połączona z tabelą ```Products``` relacją jeden do wielu (produkt ma wiele opinii, opinia jest przypisana do jednego produktu).
Napisz kilka zapytań, które dodadzą opinie do istniejących produktów. Napisz stronę, na której wyświetlają się wszystkie produkty. Pod każdym produktem mają wyświetlić się opinie do niego.

### Zadanie A3 &ndash; relacja wiele do wielu
Połącz tabele ```Products``` i ```Orders``` relacją wiele do wielu. Napisz kilka zapytań, które połączą produkty z zamówieniami.

Napisz stronę, na której będą widoczne:
* wszystkie zamówienia,
* wszystkie produkty należące do zamówienia (pod spodem).

Napisz stronę, na której będą widoczne:
* wszystkie produkty,
* zamówienia, w których ten produkt się pojawił (pod spodem).

## Zadania rozwiązywane samodzielne

### Zadanie B0 &ndash; import bazy danych
Jeżeli nie masz bazy danych z wczoraj albo masz ją niekompletną, to usuń ją i stwórz nową bazę danych o nazwie ```cinema_db```. Następnie zaimportuj do niej dane z pliku **kino.sql**. Są to tabele powypełniane dużą ilością danych. Takie jak wczoraj, brakuje tylko tabeli płatności.

### Zadanie B1 &ndash; relacja jeden do jednego
Stwórz tabelę do płatności. Ma mieć takie same dane jak w zadaniach z poprzedniego dnia, ale z tabelą `Bilety` ma być powiązana relacją jeden do jednego (wpłynie to na kolumnę **id**). Relacja między biletem a płatnością jest następująca: bilet ma 1 lub 0 płatności (jest wtedy nieopłacony) &ndash; płatność musi być przypisana do biletu.

Napisz stronę, na której można kupić bilet i wybrać sposób płatności (może go nie być). Następnie napisz stronę, na której możemy pokazać wszystkie bilety opłacona za pomocą:
* karty,
* gotówki,
* przelewu,
* nieopłacone (czyli takie, które nie mają płatności w systemie).

Najpierw przetestuj zapytania SQL w konsoli lub panelu administracyjnym, dopiero potem napisz kod PHP.

### Zadanie B2 &ndash; relacja wiele do wielu
Połącz tabele `Kina` i `Filmy` poprzez relację wiele do wielu (film może być wyświetlany w wielu kinach, kino może mieć wiele filmów).
Dodatkowo stworzoną tabelę nazwij `Seans`.
Następnie:
* Napisz stronę, na której można stworzyć nowy seans.
* Napisz stronę, na której można wybrać wszystkie kina mające w repertuarze dany film.
* Napisz stronę, na której wypisane są wszystkie filmy wyświetlane w danym kinie.

Pamiętaj, żeby najpierw przetestować zapytania SQL w konsoli lub panelu administracyjnym, dopiero potem pisać kod PHP.

### Zadanie B3 &ndash; relacja wiele do jednego
Połącz tabele `Seanse` i `Bilety` za pomocą relacji wiele do jednego (na seans może być sprzedanych wiele biletów, jeden bilet może być tylko na jeden seans).

Napisz stronę, na której możemy kupić bilet na wybrany seans. Seanse mają być wybierane z listy drop-down (użyj do tego tagu ```<select>```). W tym celu wczytaj z bazy danych wszystkie dostępne seanse i pętlą **for** wygeneruj ```option``` do formularza.  
Napisz stronę, na której wyświetlamy dane z biletu (**ID** seansu, nazwa filmu, nazwa kina, cena biletu).

Najpierw przetestuj zapytania SQL w konsoli lub panelu administracyjnym, a następnie pisz kod PHP.

## Cześć C &ndash; praca domowa
### Zadanie C1 &ndash; strona sieci kin
Stwórz aplikację, na której można:
* zobaczyć wszystkie filmy (w stronie filmu zobaczyć opis, rating + listę kin, która go wyświetla),
* zobaczyć wszystkie kina (na stronie kina wypisz wszystkie filmy + seanse w tym kinie),
* kupić bilet na dany seans,
* zapłacić za bilet.

### Zadanie C2 &ndash; panel administracyjny
Stwórz panel administracyjny dla sieci kin. Powinna w nim być możliwość dodawania kin, filmów, seansów, zarządzania biletami (sprawdzanie płatności itp).
