<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Word;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class WordSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $words = [
            [
                'term' => "Programmazione",
                'description' => "La programmazione è il processo di ideazione, progettazione e costruzione di programmi informatici eseguibili volti alla risoluzione di problemi...",
                'tags' => [1]
            ],
            [
                'term' => "Framework",
                'description' => "è un'architettura logica di supporto (spesso un'implementazione logica di un particolare design pattern) sulla quale un software può essere progettato e realizzato...",
                'tags' => [1]
            ],
            [
                'term' => "Debug",
                'description' => "Il debugging (o semplicemente debug) o depurazione, consiste nell'individuare e correggere errori nel codice (bug)",
                'tags' => [1]
            ],
            [
                'term' => "Libreria",
                'description' => "Una libreria si compone di un pacchetto di uno o più file volti a fornire metodi aggiuntivi (e magari completi) per lo sviluppo di un applicazione o di un software.",
                'tags' => [1]
            ],
            [
                'term' => "Diagramma di flusso",
                'description' => "È una rappresentazione grafica delle operazioni da eseguire per l'esecuzione di un algoritmo.",
                'tags' => [1]
            ],
            [
                'term' => "Linguaggio di programmazione",
                'description' => "Un linguaggio di programmazione è un sistema di notazione per la scrittura di software...",
                'tags' => [1]
            ],
            [
                'term' => "Linguaggio di mark-up",
                'description' => "Un linguaggio di markup è un insieme di regole che descrivono i meccanismi di rappresentazione o d'impaginazione di un testo.",
                'tags' => [1]
            ],
            [
                'term' => "HTML",
                'description' => "L'HyperText Markup Language nato per la formattazione e impaginazione di documenti ipertestuali disponibili.",
                'tags' => [1, 2]
            ],
            [
                'term' => "linguaggi di front end",
                'description' => "tutto ciò che ha a che fare con l'interfaccia utente",
                'tags' => [1]
            ],
            [
                'term' => "Directory",
                'description' => "In informatica, una directory o cartella è una specifica entità del file system che elenca altre entità e che permette di organizzarle in una struttura ad albero...",
                'tags' => [1]
            ],
            [
                'term' => "Repository",
                'description' => "Un repository (lett. 'deposito' o 'ripostiglio'), in informatica, è un ambiente di un sistema informativo...",
                'tags' => [1]
            ],
            [
                'term' => "Booleano",
                'description' => "In informatica, quello booleano è un tipo di dato i cui unici due possibili valori rappresentano il valore di verità in un'algebra di Boole...",
                'tags' => [1]
            ],
            [
                'term' => "Linguaggi di backend",
                'description' => "tuttto ciò che ha a che fare con la raccolta dati che fornisce l'utente",
                'tags' => [1]
            ],
            [
                'term' => "File",
                'description' => "Il termine file (dalla lingua inglese, traducibile come 'fascicolo' o 'archivio') in informatica indica un contenitore di dati...",
                'tags' => [1]
            ],
            [
                'term' => "Folder",
                'description' => "",
                'tags' => [1]
            ],
            [
                'term' => "Variabile",
                'description' => "Una variabile, in informatica, è un contenitore di dati situato in una porzione di memoria destinata a contenere valori, suscettibili di modifica nel corso dell'esecuzione di un programma...",
                'tags' => [1]
            ],
            [
                'term' => "Costante",
                'description' => "In informatica una costante identifica una porzione di memoria il cui valore non varia nel corso dell'esecuzione di un programma...",
                'tags' => [1]
            ],
            [
                'term' => "Scrollbar",
                'description' => "In informatica una barra di scorrimento (in inglese scrollbar) è un controllo grafico (widget) con cui testi, immagini, icone, elementi ed altri oggetti visualizzati sullo schermo all'interno di una finestra del sistema operativo o di una applicazione...",
                'tags' => [1]
            ],
            [
                'term' => "Server",
                'description' => "Un server (dall'inglese «serviente, servitore, cameriere») in informatica e telecomunicazioni è un dispositivo fisico o sistema informatico di elaborazione e gestione del traffico di informazioni...",
                'tags' => [1]
            ],
            [
                'term' => "Shortcut",
                'description' => "Una scorciatoia da tastiera (in inglese keyboard shortcut), in informatica, è la pressione di due o più tasti contemporaneamente che richiamano una certa operazione di un software o del sistema operativo di un PC...",
                'tags' => [1]
            ],
            [
                'term' => "Codice sorgente",
                'description' => "In informatica, il codice sorgente (spesso detto sorgente o codice o listato) è il testo di un algoritmo di un programma scritto in un determinato linguaggio di programmazione...",
                'tags' => [1]
            ],
            [
                'term' => "Byte",
                'description' => "Il byte con i relativi multipli è l'unità più utilizzata dal grande pubblico...",
                'tags' => [1]
            ],
            [
                'term' => "Log",
                'description' => "Il termine viene utilizzato per indicare: la registrazione sequenziale e cronologica delle operazioni effettuate da un utente, un amministratore o automatizzate...",
                'tags' => [1]
            ],
            [
                'term' => "Browser",
                'description' => "In informatica il browser Web (o semplicemente browser /ˈbraʊzə(r)/), in italiano navigatore Web, è un'applicazione per l'acquisizione, la presentazione e la navigazione di risorse sul Web...",
                'tags' => [1]
            ],
            [
                'term' => "Input/output",
                'description' => "In informatica, con input/output o ingresso/uscita (abbreviato I/O) si intendono tutte le interfacce informatiche messe a disposizione da un sistema operativo ai programmi...",
                'tags' => [1]
            ],
            [
                'term' => "Hardware",
                'description' => "L'hardware (abbreviato HW, dall'inglese hard «duro, pesante», e ware «merci, prodotti», su imitazione del termine software) è l'insieme di tutte le parti tangibili elettroniche, elettriche, meccaniche, magnetiche, ottiche che consentono il funzionamento di un computer...",
                'tags' => [1]
            ],
            [
                'term' => "destinazione d'uso del codice",
                'description' => "programmazione web, programmazione videogiochi, programmazione per dispositivi mobili etc...",
                'tags' => [1]
            ],
            [
                'term' => "Software",
                'description' => "Il software è un programma = insieme di istruzioni che indicano al pc cosa fare!",
                'tags' => [1]
            ],
            [
                'term' => "Editor",
                'description' => "Programma di modifica di testo o immagini",
                'tags' => [1]
            ],
            [
                'term' => "Oggetti",
                'description' => "Un oggetto è una istanza di una classe. Esso è dotato di tutti gli attributi e i metodi definiti dalla classe...",
                'tags' => [1]
            ],
            [
                'term' => "Vue",
                'description' => "Vue.js è uno dei framevork JavaScript più utilizzati per la realizzazione di interfacce web e single page application...",
                'tags' => [1]
            ],
            [
                'term' => "Oop",
                'description' => "L'OOP è quindi un paradigma di programmazione basato sul concetto di oggetti...",
                'tags' => [1]
            ],
            [
                'term' => "Incapsulamento",
                'description' => "L'incapsulamento è la proprietà per cui i dati che definiscono lo stato interno di un oggetto e i metodi che ne definiscono la logica sono accessibili ai metodi dell'oggetto stesso...",
                'tags' => [1]
            ],
            [
                'term' => "Hoisting",
                'description' => "Processo che interesse la keyword 'function' e porta il browser a leggere le dichiarazioni delle funzioni, 'issandole' fino in cima alla pagina, prima di eseguire il codice.",
                'tags' => [1]
            ],
            [
                'term' => "Ereditarieta",
                'description' => "Il meccanismo dell'ereditarietà è utilizzato in fase di strutturazione/definizione/pianificazione del software...",
                'tags' => [1]
            ],
            [
                'term' => "Classi",
                'description' => "Le classi definiscono dei tipi di dato e permettono la creazione degli oggetti secondo le caratteristiche definite nella classe stessa...",
                'tags' => [1, 6]
            ],
            [
                'term' => "Sql",
                'description' => "SQL è l'acronimo di Structured Query Language, vale a dire Linguaggio Strutturato di Interrogazione...",
                'tags' => [1]
            ],
            [
                'term' => "Separation of Concerns",
                'description' => "Il principio di separazione delle sezioni, affindandone ognuna a un linguaggio. Esempio: il mark up è affidato all'HTML lo stile al CSS, la logica a Javascript.",
                'tags' => [1]
            ],
            [
                'term' => "HEAD",
                'description' => "Un documento HTML è composto da due parti principali, una parte superiore chiamata 'head' (testa) e una parte inferiore chiamata 'body' (corpo). La sezione head è l'area dedicata all'intestazione (header) del documento HTML e comprende tutte quelle informazioni di controllo che non sono visualizzate dal browser ma che consentono la corretta visualizzazione della pagina. In questa sezione vengono inseriti tutti i meta tag in HTML per definire il titolo, gli stili, gli script e le altre informazioni.",
                'tags' => [2]
            ],
            [
                'term' => "BODY",
                'description' => "È la sezione centrale, o corpo appunto, delle pagine web. Questa sezione racchiude tutti i contenuti, come il testo, le immagini e i collegamenti che costituiscono la parte visualizzata dal browser.",
                'tags' => [2]
            ],
            [
                'term' => "TAG",
                'description' => "Si tratta di una parola chiave del linguaggio di markup racchiusa tra parentesi angolari (<>).",
                'tags' => [2]
            ],
            [
                'term' => "META TAG",
                'description' => "I metadati vengono generalmente utilizzati per specificare il set di caratteri, la descrizione della pagina, le parole chiave, l'autore del documento e le impostazioni della visualizzazione.",
                'tags' => [2]
            ],
            [
                'term' => "OPENING/CLOSING TAG",
                'description' => "Sono tag che necessitano di un'apertura e una chiusura <tag>content</tag>.",
                'tags' => [2]
            ],
            [
                'term' => "SELF-CLOSING TAG",
                'description' => "Esistono degli elementi che non necessitano di alcun contenuto e che da soli hanno un valore e un significato strutturale. I tag privi di contenuto prendono il nome di self-closing e sono scritti in questa forma: <tag>.",
                'tags' => [2]
            ],
            [
                'term' => "TAG SEMANTICI",
                'description' => "Un elemento semantico descrive espressamente il proprio significato sia al browser che allo sviluppatore. L'uso dei tag semantici permette agli sviluppatori di marcare documenti web in modo da strutturare le informazioni secondo uno standard comune. (es <header>, <main>, <section>, <footer>)",
                'tags' => [2]
            ],
            [
                'term' => "CASE SENSITIVE",
                'description' => "L’espressione inglese case sensitivity, traducibile in italiano come sensibilità alle maiuscole, indica ogni operazione di analisi del testo in cui le lettere maiuscole e quelle minuscole vengono trattate come fossero caratteri completamente differenti.",
                'tags' => [2]
            ],
            [
                'term' => "ELEMENT",
                'description' => "L'elemento è definito dall'inizio di un tag, il suo contenuto e la fine dello stesso tag.",
                'tags' => [2]
            ],
            [
                'term' => "CONTENT",
                'description' => "L'attributo content fornisce il valore associato all'attributo 'http-equiv' o 'name'.",
                'tags' => [2]
            ],
            [
                'term' => "TAG NIDIFICATO",
                'description' => "Quando un tag contiene uno o altri tag.",
                'tags' => [2]
            ],
            [
                'term' => "INPUT",
                'description' => "L'elemento HTML <input> viene utilizzato per creare controlli interattivi per moduli basati sul Web al fine di accettare dati dall'utente.",
                'tags' => [2]
            ],
            [
                'term' => "Form",
                'description' => "Il tag <form> è un'area interattiva in cui gli utenti possono inserire e inviare informazioni al server. I dati possono poi essere ricevuti da un file PHP.",
                'tags' => [2]
            ],
            [
                'term' => "BLOCK ELEMENTS",
                'description' => "Un elemento a livello di blocco inizia sempre su una nuova riga e occupa l'intera larghezza disponibile.",
                'tags' => [2]
            ],
            [
                'term' => "INLINE ELEMENTS",
                'description' => "Un elemento a livello di blocco NON inizia su una nuova riga ed occupa la larghezza necessaria.",
                'tags' => [2]
            ],
            [
                'term' => "ATTRIBUTO",
                'description' => "Un attributo è una caratteristica di un elemento, un’informazione associata ad un elemento. Sintatticamente essa viene rappresentata nella forma nome-attributo=”valore-attributo”.",
                'tags' => [2]
            ],
            [
                'term' => "Classi HTML",
                'description' => "In HTML, il termine 'classe' si riferisce a un attributo utilizzato per assegnare uno o più identificatori a uno o più elementi HTML.",
                'tags' => [2]
            ],
            [
                'term' => "ID",
                'description' => "In HTML, l'attributo 'id' è utilizzato per fornire un identificatore univoco ad un elemento all'interno del file HTML.",
                'tags' => [2]
            ],
            [
                'term' => "Commenti",
                'description' => "Aiutano il programmatore ad annotare, ordinare, descrivere le operazioni svolte.",
                'tags' => [2, 3]
            ],
            [
                'term' => "Selettore",
                'description' => "Costrutto che permette di selezionare uno o più elementi dalla pagina web per applicare degli stili grafici",
                'tags' => [3]
            ],
            [
                'term' => "Proprietà (width, background-color, font-family,...)",
                'description' => "Definisce un aspetto grafico dell'elemento o gruppo di elementi da modificare",
                'tags' => [3]
            ],
            [
                'term' => "CSS",
                'description' => "Cascading Style Sheets, in italiano fogli di stile a cascata, è un linguaggio usato per definire la formattazione di documenti HTML, XHTML e XML. L'introduzione del CSS si è resa necessaria per separare i contenuti delle pagine HTML dalla loro formattazione o layout e permettere una programmazione più chiara e facile da utilizzare, sia per gli autori delle pagine stesse sia per gli utenti, garantendo contemporaneamente anche il riutilizzo di codice ed una sua più facile manutenzione.",
                'tags' => [1, 3]
            ],
            [
                'term' => "Selettore di tag (p, div, h1, ....)",
                'description' => "Seleziona tutti i tag dello stesso tipo",
                'tags' => [3]
            ],
            [
                'term' => "Selettore di classe (.class-name)",
                'description' => "Seleziona tutti gli elementi appartenenti ad una classe(gruppo) definita dal programmatore",
                'tags' => [3]
            ],
            [
                'term' => "Selettore di ID (contrassegno '#id-name')",
                'description' => "Seleziona un elemento univocamente contrassegnato",
                'tags' => [3]
            ],
            [
                'term' => "Selettore universale (*)",
                'description' => "Seleziona tutti gli elementi della pagina",
                'tags' => [3]
            ],
            [
                'term' => "Valori",
                'description' => "I valori di un selettore css possono essere numeri, unità di misura, percentuali, codici per la definizione dei colori, URI, parole chiave, stringhe di testo",
                'tags' => [3]
            ],
            [
                'term' => "Pseudo-elementi",
                'description' => "Elemento a tutti gli effetti che però mantiene le stesse proprietà dell'elemento al quale appartiene, almeno fintanto che queste non vengono modificate con i CSS.",
                'tags' => [3]
            ],
            [
                'term' => "Pseudo-classi / selettori avanzati",
                'description' => "Selettori CSS preceduti da due punti e servono per selezionare degli elementi in base a determinate condizioni.",
                'tags' => [3]
            ],
            [
                'term' => "Ereditarietà Css",
                'description' => "Caratteristica che permette ad un elemento di ereditare proprietà di uno o più elementi padre in cui è contenuto",
                'tags' => [3]
            ],
            [
                'term' => "Block-level (block, inline, inline block,...)",
                'description' => "Definisce come un elemento prende posto nella pagina: block-> occupa un intera riga / inline -> occupa lo stretto necessario su una riga",
                'tags' => [3]
            ],
            [
                'term' => "Overflow",
                'description' => "È una proprietà utilizzata per gestire il comportamento del contenuto quando l'area di contenuto è più piccola della sua dimensione effettiva.",
                'tags' => [3]
            ],
            [
                'term' => "Float  selettore [float: valore;]",
                'description' => "Con questa proprietà è possibile rimuovere un elemento dal normale flusso del documento e spostarlo su uno dei lati (destro o sinistro) del suo elemento contenitore.",
                'tags' => [3]
            ],
            [
                'term' => "Clear",
                'description' => "La proprietà clear serve a impedire che al fianco di un elemento compaiano altri elementi con il float. Si applica solo agli elementi blocco e non è ereditata. selettore [clear: valore;]",
                'tags' => [3]
            ],
            [
                'term' => "Flex",
                'description' => "Flexbox, 'Flexible Box', è un layout model che offre un modo efficiente per distribuire gli spazi tra gli elementi all'interno di un contenitore e allineare gli elementi in modo flessibile, indipendentemente dalle dimensioni dello schermo e dalla disposizione degli elementi.",
                'tags' => [3]
            ],
            [
                'term' => "@-rules",
                'description' => "Il termine si riferisce a regole CSS speciali che iniziano con il simbolo '@'. Queste regole sono utilizzate per definire stili globali, impostazioni di pagina, media query e altri aspetti specifici del foglio di stile che vanno oltre le regole di stile tradizionali.",
                'tags' => [3]
            ],
            [
                'term' => "Responsiveness ",
                'description' => "Si tratta di istruzioni CSS che permettono di impostare stili differenti al variare della dimensione dello schermo. Ha come fine quello di ottimizzare la user experience.",
                'tags' => [3]
            ],
            [
                'term' => "Animation (@frame...)",
                'description' => "Permette di definire un'animazione da attribuire poi ad un elemento dietro specifiche: tempo di esecuzione, numero di iterazioni, ...",
                'tags' => [3]
            ],
            [
                'term' => "Transition (transition: nome-proprietà)",
                'description' => "Osserva una o più proprietà di un elemento e ne definisce il comportamento al suo variare",
                'tags' => [3]
            ],
            [
                'term' => "Selettore :root",
                'description' => "Il selettore :root consente di targetizzare l'elemento di livello più alto nel DOM o nell'albero del documento. Questo sta ad indicare che le variabili dichiarate in questo modo sono da intendersi in ambito globale.",
                'tags' => [3]
            ],
            [
                'term' => "SASS",
                'description' => "(Syntactically Awesome Stylesheet) SASS è un'estensione del linguaggio CSS che permette di utilizzare variabili, di creare funzioni e di organizzare il foglio di stile in più file. Riduce la ripetizione di CSS e quindi fa risparmiare tempo.",
                'tags' => [3]
            ],
            [
                'term' => "Specificità",
                'description' => "La specificità è il valore che permette di definire la priorità di una regola CSS rispetto ad un'altra. Ogni selettore ID ha specificità pari a 100. Ogni classe, pseudo-classe e selettore di attributo ha specificità pari a 10. Ogni selettore di tipo e pseudo-elemento ha specificità pari a 1.",
                'tags' => [3]
            ],
            [
                'term' => "Position: relative",
                'description' => "L'elemento viene posizionato relativamente alla posizione naturale che l'elemento stesso avrebbe occupato nel normale flusso del documento. L'elemento non viene rimosso dal flusso del documento in quanto a ingombro originario, ma solo a livello visivo.",
                'tags' => [3]
            ],
            [
                'term' => "Position: absolute",
                'description' => "Il posizionamento assoluto avviene sempre rispetto al 'contenitore' dell'elemento. L'elemento viene rimosso dal flusso del documento in tutto, ed è posizionato in base ai valori forniti con le proprietà top, right, bottom o left.",
                'tags' => [3]
            ],
            [
                'term' => "Position: fixed",
                'description' => "Un elemento con posizionamento fisso non scorre con il resto del documento: rimane sempre fisso al suo posto. La differenza sta nel fatto che: per fixed il 'contenitore' di riferimento è sempre il Viewport (cioè la parte visibile della pagina HTML).",
                'tags' => [3]
            ],
            [
                'term' => "z-index",
                'description' => "'z-index' è una proprietà che determina l'ordine di impilamento degli elementi su uno stesso piano. Questa proprietà viene utilizzata principalmente quando si lavora con elementi sovrapposti all'interno di un layout. Gli elementi con un valore di z-index più alto verranno visualizzati sopra quelli con un valore più basso.",
                'tags' => [3]
            ],
            [
                'term' => "CSS Media Query",
                'description' => "Usando le Media Query è possibile specificare che determinate regole CSS vadano applicate solo se si verificano precise condizioni. Permettono di determinare la macro-tipologia di dispositivo che sta accedendo al nostro sito.",
                'tags' => [3]
            ],
            [
                'term' => "vw e vh",
                'description' => "La viewport è la parte visibile dall’utente di una pagina Web. 1vh = 1/100 di altezza del viewport. 1vw = 1/100 di larghezza del viewport.",
                'tags' => [3]
            ],
            [
                'term' => "CSS Filters",
                'description' => "I filtri in css ci permettono di aggiungere effetti e modificare le nostre foto direttamente nella nostra pagina web, al caricamento della pagina o come effetto di un’interazione con l’utente.",
                'tags' => [3]
            ],
            [
                'term' => "Costrutti",
                'description' => "Un costrutto non è altro che una struttura di controllo in un linguaggio di programmazione che permettono di combinare tra loro istruzioni elementari creando cosi istruzioni complesse, controllando il flusso della loro esecuzione, i più famosi sono i costrutti selettivi come if - else e lo switch, e i costrutti iterativi come il while e il for.",
                'tags' => [10]
            ],
            [
                'term' => "if",
                'description' => "if è collegata con una condizione e seguita da un blocco di codice. Se la condizione risulta vera il blocco di codice viene eseguito una sola volta;",
                'tags' => [10]
            ],
            [
                'term' => "else if",
                'description' => "else if è usato a cascata di un if ed è seguito da un’altra condizione booleana e da un altro blocco di codice. Se la condizione dell’if a cui l’else if è collegato risulta falsa allora viene verificata quella dell’else if che, se vera, porterà all’esecuzione del blocco di codice al suo interno;",
                'tags' => [10]
            ],
            [
                'term' => "else",
                'description' => "else si trova alla fine di un blocco if – else if e offre un’alternativa da attuare nel caso in cui tutte le condizioni dei vari if ed else if collegati siano risultate false.",
                'tags' => [10]
            ],
            [
                'term' => "switch",
                'description' => "lo switch è efficace per ricevere una determinata selezione tra un numero esatto di possibilità. In base al valore di un’espressione, infatti, generalmente una variabile o l’invocazione a una funzione, viene eseguito uno tra diversi blocchi di codice contrassegnati dalla parola chiave case.",
                'tags' => [10]
            ],
            [
                'term' => "Break (switch)",
                'description' => "Il comando break interrompe un blocco di istruzioni e forza l'engine ad eseguire la prima istruzione che segue il blocco contenente il break .",
                'tags' => [10]
            ],
            [
                'term' => "Default (switch)",
                'description' => "Se è previsto un blocco default, questo verrà eseguito solo nel caso in cui nessuno dei valori associati ai case precedenti combaci con il valore dell’espressione.",
                'tags' => [10]
            ],
            [
                'term' => "Ciclo",
                'description' => "A volte è necessario eseguire più volte lo stesso blocco di codice per ottenere il risultato desiderato. Questo viene effettuato usando le istruzioni di iterazione, dette anche semplicemente 'cicli'.",
                'tags' => [10]
            ],
            [
                'term' => "Ciclo For",
                'description' => "La modalità standard di eseguire un ciclo for vede l’utilizzo di tre espressioni racchiuse tra parentesi tonde e separate da punto e virgola indicanti rispettivamente:",
                'tags' => [10]
            ],
            [
                'term' => "Inizializzazione",
                'description' => "Da eseguire una sola volta prima dell’avvio del ciclo",
                'tags' => [10]
            ],
            [
                'term' => "Condizione di iterazione",
                'description' => "Di natura booleana, finché risulta vera il ciclo prosegue. Viene eseguita prima di ogni iterazione del ciclo for. Se è falsa sin dall’inizio, il ciclo non sarà eseguito nemmeno una volta;",
                'tags' => [10]
            ],
            [
                'term' => "Incremento",
                'description' => "Viene sempre eseguita alla fine di ogni iterazione e generalmente contiene l’incremento di una variabile contatore.",
                'tags' => [10]
            ],
            [
                'term' => "Ciclo for in",
                'description' => "Questo costrutto è particolarmente utile quando vogliamo ispezionare un oggetto al suo interno navigando tra le sue proprietà.",
                'tags' => [10]
            ],
            [
                'term' => "Ciclo for of",
                'description' => "Se il nostro scopo fosse ancora diverso, ovvero muoverci tra gli elementi di un array potremmo usare il for…of. Ad esempio, prendiamo una lista di nomi e stampiamoli accompagnati dalla loro lunghezza.",
                'tags' => [10]
            ],
            [
                'term' => "Funzione",
                'description' => "Le funzioni, sono dei pezzi di codice che possono essere richiamati più e più volte nel nostro programma principale.",
                'tags' => [12]
            ],
            [
                'term' => "Dichiarazione",
                'description' => "una dichiarazione di funzione è una istruzione che definisce una funzione e assegna un nome ad essa. Esempio: function MiaFunzione(parametro)[//Blocco di codice];",
                'tags' => [12]
            ],
            [
                'term' => "Invocazione",
                'description' => "Invocare una funzione consiste nel: scriverne il nome seguito dalle parentesi tonde, nel punto di codice in cui vogliamo usarla. Esempio:  nomeFunzione(arg);",
                'tags' => [12]
            ],
            [
                'term' => "Return",
                'description' => "Nel corpo della funzione può essere presente l'istruzione return che consente di terminare e restituire un valore al codice che l'ha chiamata. Questo ci consente di assegnare ad una variabile il valore restituito da una funzione o utilizzare una funzione all'interno di una espressione.",
                'tags' => [12]
            ],
            [
                'term' => "Funzioni di Callback",
                'description' => "Funzioni Callback:  una 'funzione di callback' è una funzione passata come argomento a un'altra funzione. La funzione che riceve la callback può chiamarla in un momento successivo o in una situazione specifica",
                'tags' => [12]
            ],
            [
                'term' => "Javascript",
                'description' => "JavaScript è un linguaggio di programmazione che gli sviluppatori utilizzano per realizzare pagine Web interattive",
                'tags' => [4]
            ],
            [
                'term' => "Scope",
                'description' => "Lo scope è la porzione di codice delimitata dalle parentesi graffe, quindi non solo quelle delle funzioni, ma ad esempio quelle presenti negli if, o nei cicli for.",
                'tags' => [4]
            ],
            [
                'term' => "Operatori",
                'description' => "Gli operatori in JavaScript sono simboli o parole chiave che permettono di eseguire operazioni specifiche tra variabili, costanti o valori letterali.",
                'tags' => [11]
            ],
            [
                'term' => "Somma: +",
                'description' => "L'addizione è un'operazione matematica in cui si combinano due o più numeri per ottenere un risultato chiamato somma.",
                'tags' => [11]
            ],
            [
                'term' => "Concatenazione: +",
                'description' => "La concatenazione è un'operazione utile per unire due o più stringhe",
                'tags' => [11]
            ],
            [
                'term' => "Variabili",
                'description' => "Una variabile è uno “spazio di memoria con nome” utilizzato per salvare dati.",
                'tags' => [13]
            ],
            [
                'term' => "Let",
                'description' => "La parola chiave let si utilizza per dichiarare una variabile che si può riassegnare",
                'tags' => [13]
            ],
            [
                'term' => "Const",
                'description' => "La parola chiave const si utilizza per dichiarare una costante, ovvero una variabile che non si può riassegnare",
                'tags' => [13]
            ],
            [
                'term' => "Var",
                'description' => "La parola chiave var si utilizza per dichiarare una variabile che si può riassegnare. La differenza con let è dato dallo scope",
                'tags' => [13]
            ],
            [
                'term' => "Arrow Function",
                'description' => "Sono introdotte in ECMAScript 6 (ES6) e forniscono una sintassi più breve rispetto alle funzioni tradizionali. L'aspetto principale delle arrow function è l'uso della doppia freccia (=>) per definire la funzione.",
                'tags' => [12]
            ],
            [
                'term' => "While",
                'description' => "Il ciclo while inizia valutando la condizione. Se condizione restituisce true, il codice nel blocco delle istruzioni viene eseguito. Se condizione restituisce false, il codice nel blocco delle istruzioni non viene eseguito e il ciclo termina.",
                'tags' => [10]
            ],
            [
                'term' => "Do While",
                'description' => "Il ciclo do while in JavaScript, così come negli altri linguaggi dove questo costrutto esiste, consente di eseguire le istruzioni almeno una volta. Se la condizione è vera allora si ripete nuovamente il ciclo, altrimenti si passa all’istruzione successiva.",
                'tags' => [10]
            ],
            [
                'term' => "Server-side/backend",
                'description' => "I linguaggi server/side sono linguaggi di programmazione che vengono elaborati lato server, il più diffuso è PHP. Il compito principale è quello di interpretare ed elaborare dati provenienti da un database e fornire un riscontro alla componente client/side",
                'tags' => [5]
            ],
            [
                'term' => "PHP",
                'description' => "PHP è un acronimo il cui significato è 'Hypertext Preprocessor' (in origine nato come 'Personal Home Page Tools'). Si tratta di un linguaggio di scripting definito 'server side', ovvero un linguaggio che risiede in un server in remoto e che interpreta le istruzioni del client, le elabora e le restituisce al client che ha formulato la richiesta. PHP è un linguaggio interpretato, ovvero esiste un programma chiamato 'interprete' che si occupa di tradurre il codice PHP in un linguaggio comprensibile al computer.",
                'tags' => [1, 5]
            ],
            [
                'term' => "API",
                'description' => "L’acronimo API sta per Application Programming Interface e può essere tradotto come interfaccia di programmazione. Come suggerisce il nome italiano, un’API consente ai programmatori di accedere a determinate funzioni. Le interfacce servono, per così dire, come punto di accesso.",
                'tags' => [5]
            ],
            [
                'term' => "MAMP",
                'description' => "MAMP è acronimo di Macintosh, Apache, MySQL e PHP. Grazie ad Apache (Apache HTTP Server), MAMP trasforma il computer in un server locale, su cui girano MySQL e PHP per eseguire una pagina web dinamica nel browser locale.",
                'tags' => [5]
            ],
            [
                'term' => "echo",
                'description' => "echo o '<?= ?>' è un costrutto tipico del linguaggio PHP che permette di visualizzare lato cliente una o più stringhe di codice",
                'tags' => [5]
            ],
            [
                'term' => "var_dump",
                'description' => "E' una funzione che permette di stampare in pagina delle informazioni relative ad una variabile.",
                'tags' => [5]
            ],
            [
                'term' => "Null coalescing operator",
                'description' => "E' un operatore binario che ci permette di assegnare ad una variabile un valore di default nel caso essa sia nulla o non definita.",
                'tags' => [5]
            ],
            [
                'term' => "Array associativi",
                'description' => "Gli array associativi sono degli array i cui elementi sono caratterizzati da una coppia chiave / valore in cui la chiave (o indice) è una stringa.",
                'tags' => [5]
            ],
            [
                'term' => "URL",
                'description' => "Lo Uniform Resource Locator (URL - 'localizzatore uniforme di risorse'), è una sequenza di caratteri che identifica univocamente l'indirizzo di una risorsa su una rete di computer o presente su un host server e resa accessibile a un client.",
                'tags' => [5]
            ],
            [
                'term' => "Super Global",
                'description' => "Variabili che sono sempre accessibili, indipendentemente dallo scope del codice. Esempi includono \$_GET, \$_POST, e \$_SESSION.",
                'tags' => [5]
            ],
            [
                'term' => "__DIR__",
                'description' => "Fa parte delle 'magic constants', in particolare permette di restituire il percorso alla directory che contiene il file che richiama la costante.",
                'tags' => [5]
            ],
            [
                'term' => "Include/Require",
                'description' => "Include e Require sono istruzioni che permettono di inserire una parte di codice, o modulo, conservato in un file all'interno di un altro.",
                'tags' => [5]
            ],
            [
                'term' => "PHP Sessions",
                'description' => "La sessione è una funzionalità che ha PHP per conservare informazioni(in variabili) che vengono condivise tra più pagine.",
                'tags' => [5]
            ],
            [
                'term' => "Redirect",
                'description' => "Costrutto che permette di indirizzare i visitatori del sito ad una pagina specifica.",
                'tags' => [5]
            ],
            [
                'term' => "JSON Encode/Decode",
                'description' => "In PHP, la funzione json_encode è utilizzata per convertire una variabile PHP in una stringa JSON, mentre la funzione json_decode converte una stringa JSON in una variabile PHP.",
                'tags' => [5]
            ],
            [
                'term' => "CORS",
                'description' => "Le politiche CORS (Cross-Origin Resource Sharing) sono regole implementate dai browser per consentire o bloccare le richieste di risorse da fonti esterne rispetto al sito web che sta facendo la richiesta.",
                'tags' => [5]
            ],
            [
                'term' => "Variabili di sessione",
                'description' => "Le variabili di sessione servono come deposito temporaneo per alcune informazioni, quali nomi utente e password o elementi carrello della spesa.",
                'tags' => [5]
            ],
            [
                'term' => "Endpoint",
                'description' => "Un endpoint è un punto di accesso specifico in un'API.",
                'tags' => [5]
            ],
            [
                'term' => "URI",
                'description' => "Un URI è una stringa che identifica in modo univoco una risorsa.",
                'tags' => [5]
            ],
            [
                'term' => "JSON",
                'description' => "JavaScript Object Notation",
                'tags' => [5]
            ],
            [
                'term' => "Query string",
                'description' => "La query string è una parte di un URL che trasporta dati aggiuntivi sotto forma di coppie chiave-valore.",
                'tags' => [5]
            ],
            [
                'term' => "Postman",
                'description' => "Postman è uno strumento ampiamente utilizzato per testare API tramite richieste HTTP.",
                'tags' => [5]
            ],
            [
                'term' => "Object-Oriented Programming",
                'description' => "OOP è l'abbreviazione di Object-Oriented Programming, programmazione orientata agli oggetti. L'OOP è quindi un paradigma di programmazione basato sul concetto di oggetti, specifiche strutture di dati all'interno di una classe.",
                'tags' => [6]
            ],
            [
                'term' => "Istanza",
                'description' => "Un'istanza è la concretizzazione dell'oggetto.",
                'tags' => [6]
            ],
            [
                'term' => "Ereditarietà OOP",
                'description' => "L’ereditarietà è un caposaldo della programmazione orientata agli oggetti. Grazie all'ereditarietà possiamo definire una classe a partire da una classe più generica ed estenderne le funzionalità. La classe figlia eredita quindi tutte le proprietà e i metodi della classe genitore.",
                'tags' => [6]
            ],
            [
                'term' => "Costruttore",
                'description' => "Ogni classe ha una funzione particolare, detta costruttore, che permette di eseguire azioni nel momento di inizializzazione della classe, e di passare le proprietà dichiarate dell'oggetto, nel momento in cui viene istanziato.",
                'tags' => [6]
            ],
            [
                'term' => "Visibilità",
                'description' => "E' utilizzata per restringere l'accesso ai dati e per migliorare il concetto di isolamento e può essere di 3 tipi: public, protected, private.",
                'tags' => [6]
            ],
            [
                'term' => "Public",
                'description' => "I metodi e le variabili public saranno accessibili da qualsiasi file o metodo abbia accesso all’istanza.",
                'tags' => [6]
            ],
            [
                'term' => "Protected",
                'description' => "Potranno essere utilizzati all’interno della classe o dalle classi che derivano da essa, ma non dall’esterno della classe.",
                'tags' => [6]
            ],
            [
                'term' => "Private",
                'description' => "Potranno essere utilizzati solo all’interno della classe dove sono stati dichiarati.",
                'tags' => [6]
            ],
            [
                'term' => "Static",
                'description' => "Le proprietà o i metodi con il termine static possono essere chiamati anche senza bisogno che sia stata inizializzata un'istanza di quell'oggetto. Viene usata quando le istanze sono tutte uguali.",
                'tags' => [6]
            ],
            [
                'term' => "Composizione",
                'description' => "Tramite la composizione è possibile utilizzare una classe per costruire un'altra classe più complessa, creando una relazione di tipo ha-un tra le due classi. Ci permette di riutilizzare classi più complesse per comporre in parte altri oggetti.",
                'tags' => [6]
            ],
            [
                'term' => "Polimorfismo",
                'description' => "La parola polimorfismo indica la possibilità per uno stesso oggetto di assumere più forme. Chiameremo il metodo con lo stesso nome, ma nell’istanza della classe figlia avremo un risultato diverso.",
                'tags' => [1, 6]
            ],
            [
                'term' => "NULLSAFE OPERATOR",
                'description' => "Lavorando con la composizione, per poter accedere alle proprietà dell'istanza contenuta nella classe, è necessario verificare che questa sia effettivamente stata definita, in altre parole, che non sia null.",
                'tags' => [6]
            ],
            [
                'term' => "Trait",
                'description' => "I trait possono essere usati per creare proprietà da applicare a più classi.",
                'tags' => [6]
            ],
            [
                'term' => "Exception",
                'description' => "E' una classe preimpostata per aiutare il programmatore a gestire eventuali errori.",
                'tags' => [6]
            ],
            [
                'term' => "Scope Resolution Operator(::)",
                'description' => "L'operatore di risoluzione dell'ambito (::) è un token che consente l'accesso a una proprietà statica costante o a un metodo statico di una classe o di uno dei suoi genitori.",
                'tags' => [6]
            ],
            [
                'term' =>  "Data",
                'description' =>  "è un oggetto che rappresenta il modello dati reattivo che viene reso disponibile da Vue.",
                'tags' => [7]
            ],
            [
                'term' =>  "Methods",
                'description' =>  "I metodi sono le funzioni assegnate agli oggetti. Servono a far eseguire un blocco di codice in risposta a un evento scatenato dall'utente",
                'tags' => [7]
            ],
            [
                'term' =>  "Computed",
                'description' =>  "Proprietà definite attraverso delle funzioni che non ricevono argomenti e restituiscono sempre qualcosa, che permettono di manipolare le proprietà di base dell'oggetto data, restituendo valori che vengono ricalcolati quando una delle proprietà reattive viene modificata.",
                'tags' => [7]
            ],
            [
                'term' =>  "Moustache Syntax",
                'description' =>  "Sintassi da usare dentro i tag HTML per inserire i dati in modo dinamico. Consiste nell'aprire e chiudere due parentesi graffe.",
                'tags' => [7]
            ],
            [
                'term' =>  "Direttiva",
                'description' =>  "Il termine direttiva si riferisce agli attributi del template che iniziano con il prefisso 'v-' ad esempio v-for, v-if, vi bind ecc",
                'tags' => [7]
            ],
            [
                'term' =>  "Composition API",
                'description' =>  "La Composition API è una raccolta di funzioni utilizzate per scrivere componenti in Vue.",
                'tags' => [7]
            ],
            [
                'term' =>  "Props",
                'description' =>  "In Vue, le props sono attributi personalizzati che puoi registrare su qualsiasi componente. Definisci i tuoi dati sul componente principale e gli dai un valore. Quindi, vai al componente figlio che necessita di tali dati e passi il valore a un attributo prop. Pertanto, i dati diventano una proprietà nel componente figlio.",
                'tags' => [7]
            ],
            [
                'term' =>  "SPA",
                'description' =>  "Single Page Application: un'applicazione composta da un'unica pagina nella quale cambiano i contenuti in base alla ricerca.",
                'tags' => [7]
            ],
            [
                'term' =>  "Option API",
                'description' =>  "L' Options Api è il modo tradizionale di creare componenti Vue. Implica l'utilizzo di una serie di opzioni, come dati, metodi e proprietà calcolate, per definire il comportamento e lo stato di un componente.",
                'tags' => [7]
            ],
            [
                'term' =>  "Componente Dinamico",
                'description' =>  "I componenti dinamici in Vue.js possono cambiare in base allo stato corrente dell'applicazione. Ciò significa che Vue userà il componente appropriato in base, ad esempio, all'interazione dell'utente o ad altre condizioni",
                'tags' => [7]
            ],
            [
                'term' =>  "Vite",
                'description' =>  "Strumento di compilazione e server locale, utile allo sviluppo front-end",
                'tags' => [7]
            ],
            [
                'term' =>  "Componenti",
                'description' =>  "Moduli contenenti porzioni di codice HTML, colla sua logica JS e le proprietà dello stile CSS. La divisione di codice in moduli consente sia di lavorare su piccole parti di codice, sia in alcuni casi di riutilizzare i componenti stessi in più punti dell'applicazione o del sito.",
                'tags' => [7]
            ],
            [
                'term'  => "init",
                'description'  => "Inizializza una nuova repository",
                'tags' => [8]
            ],
            [
                'term'  => "commit",
                'description'  => "Invia una copia del lavoro eseguito nell'head",
                'tags' => [8]
            ],
            [
                'term'  => "stage",
                'description'  => "Scanerizza il lavoro selezionato e ne salva una copia, che verra poi caricata con il comando 'commit'",
                'tags' => [8]
            ],
            [
                'term'  => "push",
                'description'  => "Carica una copia del lavoro in locale sulla repository in GitHub",
                'tags' => [8]
            ],
            [
                'term'  => "branch",
                'description'  => "Ramificazione del progetto principale",
                'tags' => [8]
            ],
            [
                'term'  => "pull",
                'description'  => "Scarica una copia del lavoro dalla repository su GitHub in locale",
                'tags' => [8]
            ],
            [
                'term'  => "merge",
                'description'  => "Prova ad unificare un branch al ramo principale",
                'tags' => [8]
            ],
            [
                'term'  => "Database",
                'description'  => "Un database è una collezione organizzata di dati coerenti. Organizzato in tabelle formate da righe e colonne. (il termine database viene utilizzato anche per riferirsi al DBMS).",
                'tags' => [9]
            ],
            [
                'term'  => "Tabella DB",
                'description'  => "Una tabella di un database è formata da righe (o tuple) e colonne. Le colonne rappresentano la struttura, ossia le caratteristiche del dato da memorizzare. Ogni riga rappresenta un dato inserito.",
                'tags' => [9]
            ],
            [
                'term'  => "(R)DBMS",
                'description'  => "(Relational) Database Management System è il mezzo tecnologico che permette di gestire la collezione di dati (il database).",
                'tags' => [9]
            ],
            [
                'term'  => "NoSQL",
                'description'  => "Categoria di DBMS che non implementano le regole relazionali (es. MongoDB).",
                'tags' => [9]
            ],
            [
                'term'  => "Transazioni",
                'description'  => "Le transazioni indicano le operazioni che vengono effetuate sui dati. In caso di successo, il risultato delle operazioni deve essere permanente o persistente, mentre in caso di insuccesso si deve tornare allo stato precedente all'inizio della transazione.",
                'tags' => [9]
            ],
            [
                'term'  => "ACID properties",
                'description'  => "1. Atomicità: la transazione è indivisibile nella sua esecuzione e la sua esecuzione deve essere o totale o nulla, non sono ammesse esecuzioni parziali. 2. Coerenza: non devono verificarsi contraddizioni (incoerenza) tra i dati archiviati nel DB. 3. Isolamento: ogni transazione deve essere eseguita in modo isolato e indipendente dalle altre transazioni, l'eventuale fallimento di una transazione non deve interferire con le altre transazioni in esecuzione. 4. Durabilità: (o persistenza): una volta che una transazione abbia richiesto un commit work, i cambiamenti apportati non dovranno essere più persi.",
                'tags' => [9]
            ],
            [
                'term'  => "Tipologia di dato nei database",
                'description'  => "I database relazionali supportano nativamente diversi tipi di dato: numeri, stringhe. date, ecc.",
                'tags' => [9]
            ],
            [
                'term'  => "Numeri interi",
                'description'  => "TINYINT, SMALL / MEDIUMINT, INT, BIGINT",
                'tags' => [9]
            ],
            [
                'term'  => "Numeri con la virgola",
                'description'  => "FLOAT(I, D), DOUBLE(I, D), DECIMAL(I, D)",
                'tags' => [9]
            ],
            [
                'term'  => "Stringhe nel Database",
                'description'  => "VARCHAR(numero), TEXT, MEDIUMTEXT, LONGTEXT",
                'tags' => [9]
            ],
            [
                'term'  => "Date nel Database",
                'description'  => "DATETIME, DATE, TIME, YEAR, TIMESTAMP",
                'tags' => [9]
            ],
            [
                'term'  => "Primary Key",
                'description'  => "Chiave primaria o identificatore. Ogni tabella deve avere una colonna adibita ad identificatore, cioè un valore diverso per ogni riga inserita, che permetta di individuarla univocamente.",
                'tags' => [9]
            ],
            [
                'term'  => "Attributi",
                'description'  => "NULL / NOTNULL, DEFAULT, AUTO_INCREMENT, UNIQUE",
                'tags' => [9]
            ],
            [
                'term'  => "Indici",
                'description'  => "Gli indici sono strutture dati che il DBMS può creare per velocizzare la ricerca di dati all’interno del database.",
                'tags' => [9]
            ],
            [
                'term'  => "relazioni DB",
                'description'  => "One to Many (Uno a Molti), Many to Many (Molti a Molti), One to One(Uno a Uno)",
                'tags' => [9]
            ],
            [
                'term'  => "Foreign Key",
                'description'  => "La foreign key o chiave esterna rappresenta il collegamento tra le due entità. Contiene l'id del record dell'altra tabella messa in relazione.",
                'tags' => [9]
            ],
            [
                'term'  => "SQL - Structured Query Language",
                'description'  => "SQL è un linguaggio standard per interagire con i RDBMS",
                'tags' => [9]
            ],
            [
                'term'  => "Funzione SQL",
                'description'  => "Si utilizza per: creare e modificare schemi di database, inserire, modificare e gestire dati memorizzati, interrogare i dati memorizzati, creare e gestire strumenti di controllo ed accesso ai dati",
                'tags' => [9]
            ],
            [
                'term'  => "GUI di gestione database",
                'description'  => "Da riga di comando: tramite il comando mysql, Utilizzando gli strumenti forniti da ogni linguaggio di programmazione, Tramite programmi esterni che forniscono un'interfaccia grafica",
                'tags' => [9]
            ],
            [
                'term'  => "Operatori SQL",
                'description'  => "Uguaglianza '=', non con due o tre '=', ma solo con uno, Disuguaglianza <> o !=, Minore o minore uguale < o <=, Maggiore o maggiore uguale > o >= ",
                'tags' => [9]
            ],
            [
                'term'  => "Select",
                'description'  => "L'istruzione SELECT è un comando di interrogazione che consente di selezionare ed estrarre dati in un database relazionale mediante l'esecuzione di una query SQL.",
                'tags' => [9]
            ],
            [
                'term'  => "Select Distinct",
                'description'  => "L'istruzione SELECT DISTINCT consente di selezionare in una tabella tutti i valori di una colonna eliminando le righe con i valori duplicati.",
                'tags' => [9]
            ],
            [
                'term'  => "WHERE",
                'description'  => "WHERE è una condizione del comando di interrogazione SELECT che permette la selezione delle righe o tuple nel risultato finale. Alla condizione WHERE deve sempre seguire la condizione che permette la selezione dei dati della tabella.",
                'tags' => [9]
            ],
            [
                'term'  => "And/Or",
                'description'  => "And e Or permettono di indicare due o più condizionidi WHERE. L'operatore AND indica che tutte le condizionidevono essere vere, mentre OR indica che ne basta una vera.",
                'tags' => [9]
            ],
            [
                'term'  => "AS",
                'description'  => "La clausola AS(o Alias) è utilizzata nel comando di interrogazione SELECT per cambiare nome ad un campo ( colonna ) di una tabella. La clausola AS deve sempre seguire il nome della colonna e deve sempre essere un nome diverso da quest'ultimo.",
                'tags' => [9]
            ],
            [
                'term'  => "ON",
                'description'  => "Lo scopo della clausola ON è quello di specificare le condizioni di unione, cioè di definire il modo in cui le tabelle devono essere unite. In particolare, si definisce il modo in cui i record devono essere abbinati.",
                'tags' => [9]
            ],
            [
                'term'  => "JOIN",
                'description'  => "JOIN è il modo con cui si definisce il collegamento tra due tabelle per mezzo di due colonne che sono relazionate in qualche modo.",
                'tags' => [9]
            ],
            [
                'term'  => "ORDER BY",
                'description'  => "La clausola ORDER BY è utilizzata nel comando SELECT  per ordinare i record in base a uno o più campi ( colonne ).",
                'tags' => [9]
            ],
            [
                'term'  => "GROUP BY",
                'description'  => "La clausola GROUP BY divide una tabella in gruppi in base al valore di uno o più attributi.",
                'tags' => [9]
            ]

        ];

        foreach ($words as $word) {
            $new_word = new Word();

            // Assegno i valori alla nuova istanza di word
            $new_word->term = $word['term'];
            $new_word->description = $word['description'];

            // $new_word->fill($word);
            $new_word->save();
            $new_word->tags()->attach($word['tags']);
        }
    }
}
