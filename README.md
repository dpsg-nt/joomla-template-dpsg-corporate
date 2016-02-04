# DPSG Corporate Joomla Template

This is a Joomla template for the german scout association DPSG.

**[Download the latest version here](https://github.com/foxylion/joomla-template-dpsg-corporate/archive/master.zip)**

![Template Image](https://raw.githubusercontent.com/foxylion/joomla-template-dpsg-corporate/master/template_thumbnail.jpg)

The following documentation is in German as the template is targeted on a German audience.

## Schriften

### Überschriften

- Header 1 ``<h1>Header 2<h2>``
- Header 3 ``<h3>Header 4<h4>``

Überschriften sollten grundsätzlich nicht unbedingt in Beiträgen verwendet werden. Wenn dann nur nach dem ´"Weiterlesen"-Tag.

### Zitate
```html
<blockquote>Ich bin ein Beispiel-Zitat<cite>Autor</cite></blockquote>
```

### Tabellen

Tabellen mit alternierenden Farben können mittels CSS-Klasse im Table-Tag erzeugt werden. Dazu muss die CSS-Klasse ``colored`` gesetzt werden.
```html
<table class=“colored“>
	<tr>...</tr>
</table>
```

### Downloads
```html
<a title="Download" href="...">Download: ...</a>
```

### Weitere Richtlinien

- Nur aktuelle Artikel sollen als Haupteinträge markiert sein! (Max. 10)
- Beiträge werden in Stamm->Stufen oder Stamm->Aktionen einsortiert
- Sinnvolle "Weiterlesen" Position muss festgelegt sein (davor max. ein Bild und am besten keine Tabellen)
- Beiträge sollten ein "Einleitungsbild" und "Beitragsbild" bekommen. Andere Bilder nur einfügen, wenn‘s sein muss (und danach schauen, ob die Darstellung passt)
- Bilder in Beiträgen: ``<img src="..." alt="..." style="margin-right:10px;">``
  - Bildernamen dürfen keine Umlaute enthalten
  - Bilder müssen in den richtigen Ordner abgelegt werden
    - kategorien (Kategorie-Bilder) – Benennung: xxxx_cat.jpg
    - artikel (Beitragsbilder) – Benennung: xxxx_intro.jpg / xxxx_full.jpg
    - infoartikel (Beitragsbilder für Infoseiten) – Benennung: xxxx_intro.jpg / xxxx_full.jpg
    - System (Sonstige, z.B. für Banner oder Menüs)
  - Bildqualität sollte auf 90% festgelegt sein
  - Bild sollte progressiv gepackt sein
  - Bildgrößen: (Zuschneiden geht gut mit Paint.NET)
    - Einleitungsbild (zwei-spaltig): 420x280px
    - Beitragsbild 860x300px
    - Kategorie-Bild: 420x280px
    - Alle anderen nicht über 860px breit
    - Slider-Bilder: 1150x410px (muss genau sein!)
