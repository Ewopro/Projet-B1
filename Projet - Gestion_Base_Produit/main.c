#include <stdio.h>
#include <stdlib.h>
#include "gestion_produits.h"
#include "gestion_date.h"

void main()
{
    int nb;
    int choix_utilisateur;
    int choix_utilisateur_produit;
    int choix_utilisateur_adresse;
    int choix_utilisateur_date;
    PROD tabPROD[MAX_SIZE_TAB_PROD];
    PROD tabPROD_From_File_for_Test[MAX_SIZE_TAB_PROD];
    DATEP tabDATEP[MAX_SIZE_TAB_PROD];
    DATEP tabDATEP_From_File_for_Test[MAX_SIZE_TAB_PROD];
    ADRESSE tabADRESSE[MAX_SIZE_TAB_PROD];
    ADRESSE tabADRESSE_From_File_for_Test[MAX_SIZE_TAB_PROD];
    printf("1 = Structure produit \n");
    printf("2 = Structure Date \n");
    printf("3 = Structure Adresse \n");
    printf("4 = Afficher la base de donnée \n");
    printf("Que souhaiter vous faire: ");

    scanf("%d",&choix_utilisateur);
    if (choix_utilisateur == 1){
        printf("1 = saisie structure produit \n");
        printf("2 = afficher structure produit \n");
        printf("Que souhaiter vous faire dans la structure produit: ");
        scanf("%d",&choix_utilisateur_produit);
        if (choix_utilisateur_produit == 1){
            do
            {
                printf("introduire le nombre de PROD :");
                scanf("%d",&nb);
            }
            while(nb<=0||nb>MAX_SIZE_TAB_PROD);

            saisisListProduct(nb,tabPROD);
            afficher(nb,tabPROD);
            tri_tab_produit(nb, tabPROD,CHAMP_TRI_NOM, TRI_CROISSANT);
            afficher(nb,tabPROD);
            tri_tab_produit(nb, tabPROD,CHAMP_TRI_NOM, TRI_DECROISSANT);
            afficher(nb,tabPROD);
            tri_tab_produit(nb, tabPROD,CHAMP_TRI_PRIX,TRI_CROISSANT);
            afficher(nb,tabPROD);
            tri_tab_produit(nb, tabPROD,CHAMP_TRI_PRIX,TRI_DECROISSANT);
            afficher(nb,tabPROD);

            write_tabprod_intfile(tabPROD,nb,"file_products.txt");
            afficher(nb,tabPROD);
        }
        if(choix_utilisateur_produit == 2){
        readfileprod(tabPROD, "file_products.txt");
        }
    }

    if(choix_utilisateur == 2 ){
        printf("1 = saisie structure date \n");
        printf("2 = afficher structure date \n");
        printf("Que souhaiter vous faire dans la structure date: ");
        scanf("%d",&choix_utilisateur_date);
        if(choix_utilisateur_date == 1){
            do
            {
                printf("introduire le nombre de DATE :");
                scanf("%d",&nb);
            }
            while(nb<=0||nb>MAX_SIZE_TAB_PROD);

            saisisListDate(nb,tabDATEP);
            afficher_date(nb, tabDATEP);
            tri_tab_date(nb, tabDATEP,CHAMP_TRI_JOUR, TRI_CROISSANT);
            afficher_date(nb, tabDATEP);
            tri_tab_date(nb, tabDATEP,CHAMP_TRI_JOUR, TRI_DECROISSANT);
            afficher_date(nb, tabDATEP);
            tri_tab_date(nb, tabDATEP,CHAMP_TRI_MOIS, TRI_CROISSANT);
            afficher_date(nb, tabDATEP);
            tri_tab_date(nb, tabDATEP,CHAMP_TRI_MOIS, TRI_DECROISSANT);
            afficher_date(nb, tabDATEP);
            write_tabdate_intfile(tabDATEP,nb,"file_datep.txt");

       }else if(choix_utilisateur_date == 2) {
         readfiledate(tabDATEP,"file_datep.txt");
        }
    }

    if (choix_utilisateur == 3){
        printf("1 = saisie structure adresse \n");
        printf("2 = afficher structure adresse \n");
        printf("Que souhaiter vous faire dans la structure date: ");
        scanf("%d",&choix_utilisateur_adresse);
        if(choix_utilisateur_adresse == 1 ){
            do
            {
                printf("introduire le nombre de Adresse :");
                scanf("%d",&nb);
            }
            while(nb<=0||nb>MAX_SIZE_TAB_PROD);

            saisisListAdresse(nb,tabADRESSE);
            afficher_adresse(nb, tabADRESSE);
            write_tabadresse_intfile(tabADRESSE,nb,"file_adresse.txt");
        }
        else if(choix_utilisateur_adresse == 2) {
        readfileadresse(tabADRESSE, "file_adresse.txt");

        }

    }
    if(choix_utilisateur == 4) {
        load_tabproduit_from_db(&nb,tabPROD);
        printf("nombres de données :%d\n ",nb);
        afficher(nb,tabPROD);
        tri_tab_produit(nb, tabPROD,CHAMP_TRI_NOM, TRI_CROISSANT);
        afficher(nb,tabPROD);
        tri_tab_produit(nb, tabPROD,CHAMP_TRI_NOM, TRI_DECROISSANT);
        afficher(nb,tabPROD);
        tri_tab_produit(nb, tabPROD,CHAMP_TRI_PRIX,TRI_CROISSANT);
        afficher(nb,tabPROD);
        tri_tab_produit(nb, tabPROD,CHAMP_TRI_PRIX,TRI_DECROISSANT);
        afficher(nb,tabPROD);
        write_tabprod_intfile(tabPROD,nb,"output_reporting_produits.txt");
    }
}
