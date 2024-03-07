@extends('layouts/Prolayouts')

@section('title', 'Page d\'accueil')

@section('content')
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4">Lettre de réclamation des notes des étudiants</h1>
            <p class="mb-4">[Nom de l'Étudiant]<br>
                [Adresse de l'Étudiant]<br>
                [Ville, Code postal]<br>
                [Adresse e-mail]<br>
                [Numéro de téléphone]</p>
            <p class="mb-4">[Date]</p>
            <p class="mb-4">[Nom du Professeur]<br>
                [Nom de l'Université ou de l'Établissement]<br>
                [Adresse du Professeur ou de l'Établissement]<br>
                [Ville, Code postal]</p>
            <p class="mb-4">Objet: Réclamation concernant les notes attribuées</p>
            <p class="mb-4">Cher/Chère [Nom du Professeur],</p>
            <p class="mb-4">Je me permets de vous écrire concernant les notes que j'ai reçues pour le [nom du cours] durant le semestre en cours. Après avoir examiné attentivement mes résultats, je suis préoccupé(e) par [expliquez brièvement la nature de votre préoccupation, par exemple, une différence entre vos attentes et les résultats obtenus].</p>
            {{-- <p class="mb-4">Je suis convaincu(e) que mes efforts et ma compréhension du sujet méritaient une évaluation plus favorable. Je vous serais reconnaissant(e) si vous pouviez revoir les critères d'évaluation ou me fournir des explications supplémentaires sur les notes attribuées.</p>
            <p class="mb-4">Je suis ouvert(e) à discuter de mes performances et à travailler sur les domaines où des améliorations sont nécessaires. Votre rétroaction et votre assistance sont essentielles pour moi afin de progresser dans mes études.</p>
            <p class="mb-4">Je vous remercie par avance pour votre attention à cette réclamation et j'espère que nous pourrons résoudre cette situation de manière constructive.</p> --}}
            <p class="mb-4">Veuillez agréer, Cher/Chère [Nom du Professeur], l'expression de mes salutations distinguées.</p>
            {{-- <p class="font-bold">[Votre Nom]</p> --}}
            <div class="mt-8 flex justify-end">
                <a href="{{url('Prof/modif')}}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded mr-4 no-print">Modifier</a>
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded no-print">Envoyer</a>
            </div>
        </div>
    </div>
</body>

</html>

@endsection
