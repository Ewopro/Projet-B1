#include "gestion_bd_produit.h"
#include <winsock.h>
#include <mysql.h>

void load_tabproduit_from_db(int * nb, PROD * tabprod){
    MYSQL mysql;
    mysql_init(&mysql);
    mysql_options(&mysql,MYSQL_READ_DEFAULT_GROUP,"option");
    int nb_uplet = 0;

    if(mysql_real_connect(&mysql,"127.0.0.1","root","","gestion_base_produit",0,NULL,0))
//    if(mysql_real_connect(&mysql,"192.168.43.208","root","","tp1_cinema",0,NULL,0))
    {
        //Requête qui sélectionne tout dans ma table scores
        mysql_query(&mysql, "SELECT nom, prix FROM Produit ORDER BY nom");

        //Déclaration des pointeurs de structure
        MYSQL_RES *result = NULL;
        MYSQL_ROW row;

        unsigned int num_champs = 0;
        //On met le jeu de résultat dans le pointeur result
        result = mysql_use_result(&mysql);
        //On récupère le nombre de champs
        num_champs = mysql_num_fields(result);
        //on stock les valeurs de la ligne choisie
        while ((row = mysql_fetch_row(result)))
        {
            //On déclare un pointeur long non signé pour y stocker la taille des valeurs
            unsigned long *lengths;
            //On stocke ces tailles dans le pointeur
            lengths = mysql_fetch_lengths(result);
            strcpy(tabprod[nb_uplet].nom, row[0]);
            tabprod[nb_uplet].prix = atoi(row[1]);
           // printf("%s %d\n",tabprod[nb_uplet].nom, tabprod[nb_uplet].prix);

            nb_uplet++;
        }
        *nb = nb_uplet;
        //Libération du jeu de résultat
        mysql_free_result(result);
        //Fermeture de MySQL
       // mysql_close(&mysql);

    }
    else
    {
        printf("Une erreur s'est produite lors de la connexion à la BDD: %s", mysql_error(&mysql));
    }
}

void save_tabproduit_in_db(PROD * tabprod){

}
