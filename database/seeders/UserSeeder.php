<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Danilo Amico',
                'description' => 'Danilo, un giovane sviluppatore web alle prime armi, si trovava di fronte a un bivio cruciale nel suo percorso. Da un lato, il misterioso mondo del backend, ricco di logica complessa e manipolazione dei dati. Dall\'altro, il luminoso territorio del frontend, dove la creatività e l\'interazione utente regnavano sovrane.
                Confuso e indeciso, Danilo si avventurò nei meandri di entrambi i mondi, esplorando le loro meraviglie e affrontando le loro sfide. Nel backend, si immerse nelle intricante logiche di programmazione e nell\'ottimizzazione delle prestazioni. Nel frontend, sperimentò con design accattivanti e interattività coinvolgente.
                Mentre il tempo passava, Danilo si rese conto che non doveva scegliere tra backend e frontend, ma abbracciare entrambi. Con una comprensione più profonda dei loro ruoli complementari, Danilo unì le forze dei due mondi per creare esperienze web straordinarie.
                Così, Danilo non seguì un\'unica strada, ma aprì un nuovo sentiero, diventando un maestro nel bilanciare le sfide del backend e le sfide del frontend.',
                'email' => 'danilo@amico.it',
                'email_verified_at' => now(),
                'image' => 'danilo.png',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),

            ],
            [
                'name' => 'Erica Marzi',
                'description' => 'Erica, una giovane sviluppatrice web con un cuore di leone, si immerse nelle profondità del frontend, affrontando ogni sfida con coraggio e creatività. Armata del suo laptop e della sua determinazione, navigava tra le intricati sentieri del codice, trasformando linee di script in opere d\'arte digitali.
                Ma un oscuro nemico si ergeva sul suo cammino: il temibile boss finale, JavaScript. Con il suo potere magico e le sue astuzie, sfidava Erica e il suo team, lanciando bug e sfide complesse.   
                Nonostante le difficoltà, Erica non si arrese. Con ogni riga di codice scritta con maestria, si avvicinava sempre di più al nemico. Con pazienza e ingegno, trovava le debolezze nel codice avversario e le sfruttava a suo vantaggio.
                Finalmente, dopo una lunga e ardua battaglia, Erica e il suo team riuscirono a sconfiggere il boss finale JavaScript. Il regno del frontend tornò alla sua pace e prosperità, e Erica venne acclamata come l\'eroina che aveva salvato il mondo digitale. Con il suo coraggio e la sua abilità, aveva dimostrato di essere una vera maestra del frontend.',
                'email' => 'erica@marzi.it',
                'email_verified_at' => now(),
                'image' => 'erica.png',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),

            ],
            [
                'name' => 'Amarildo Shehu',
                'description' => 'Amarildo, giovane sviluppatore web solitario, si rifugiava nell\'oscurità del suo studio, circondato solo dal ronzio del computer e dallo scorrere del codice. Con una mente brillante e un cuore silenzioso, affrontava da solo le sfide del web.
                Ma un giorno, durante un progetto complicato, Amarildo si trovò in difficoltà. Con coraggio, decise di chiedere aiuto. Fu così che incontrò un gruppo di sviluppatori, ciascuno con le proprie abilità uniche. Insieme, affrontarono le sfide condivise, condividendo conoscenze e risorse. 
                Amarildo imparò che la forza di un team superava di gran lunga la sua solitudine. Con il sostegno dei suoi nuovi amici, superò ostacoli che da solo non avrebbe mai potuto affrontare.               
                Quella collaborazione non solo portò al successo del progetto, ma cambiò anche Amarildo. Scoprì il valore della condivisione e dell\'aiuto reciproco. Da allora, Amarildo non fu più solo nel suo viaggio nel mondo dello sviluppo web, ma aveva un team al suo fianco, pronto ad affrontare qualsiasi sfida.',
                'email' => 'amarildo@shehu.it',
                'email_verified_at' => now(),
                'image' => 'amarildo.jpeg',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),

            ],
            [
                'name' => 'Francesco Mongiello',
                'description' => 'Francesco, giovane programmatore dal brillante ingegno, si lasciò tentare dalle promesse di Amsterdam, città incantata dai suoi richiami vivaci. Abbandonando temporaneamente il suo laptop e il codice che tanto amava, si immerse nelle gioie effimere di una vita senza regole. Giorni sfavillanti e notti senza fine si susseguirono, mentre Francesco si smarriva tra le luci sfavillanti e le strade intricate.
                Ma nel cuore della vivace città, un senso di vuoto iniziò a farsi strada. Le risate e le avventure non colmarono il vuoto della sua anima. Un incontro fortuito con un vecchio amico lo riportò alla realtà, facendogli capire che il suo vero tesoro era la passione per la programmazione.
                Con il cuore pieno di pentimento e rinnovata determinazione, Francesco lasciò Amsterdam alle spalle. A casa, accolsero il suo ritorno come quello di un figliol prodigo, pronto a ricominciare il suo viaggio nel mondo della programmazione, consapevole che la vera felicità risiedeva nella sua passione.',
                'email' => 'francesco@mongiello.it',
                'email_verified_at' => now(),
                'image' => 'francesco.png',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),

            ],
            [
                'name' => 'Gianluca Maffucci',
                'description' => 'In un regno incantato, Gianluca, un giovane mago del web, si trova ad affrontare il terribile Laravel, il temibile signore del backend. Con l\'aiuto dei suoi coraggiosi compagni, Gianluca si addentra nell\'oscura foresta di codice, affrontando bug e ostacoli lungo il cammino.
                Giunto al cospetto di Laravel, Gianluca non si fa intimidire dal suo sinistro silenzio. Armato del suo editor di testo e di una buona dose di determinazione, sferra attacchi contro il nemico, cercando di svelarne i punti deboli.
                Laravel, astuto e ingannevole, cerca di confondere Gianluca con trucchi e bug inaspettati. Ma Gianluca non si arrende. Con astuzia e intuito, trova le falle nel codice nemico e le sfrutta a suo vantaggio.
                Dopo una lunga e ardua battaglia, Gianluca riesce finalmente a sconfiggere il terribile final boss Laravel, riportando la pace nel regno del backend. E così, con un sorriso sulle labbra e nuove avventure nel cuore, Gianluca si prepara a esplorare il vasto mondo della programmazione, pronto ad affrontare qualsiasi sfida gli si presenti.',
                'email' => 'gianluca@maffucci.it',
                'email_verified_at' => now(),
                'image' => 'gianluca.png',
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),

            ],
        ];

        foreach ($users as $user) {
            $new_user = new User();
            $new_user->fill($user);
            $new_user->save();
        }
    }
}
