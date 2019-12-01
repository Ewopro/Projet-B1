#ifndef STRUCTURE_GESTION_STOCK_H
#define STRUCTURE_GESTION_STOCK_H

#include <stdio.h>
#include <ctype.h>
#include <stdlib.h>

#define MAX_SIZE_LIGNE_FILE 100
#define MAX_SIZE_TAB_PROD 1000
#define CHAMP_TRI_NOM 1
#define CHAMP_TRI_PRIX 2
#define TRI_CROISSANT 1
#define TRI_DECROISSANT 2
#define CHAMP_TRI_JOUR 1
#define CHAMP_TRI_MOIS 2

struct produit
{
    char nom[40];
    int prix;
};
typedef struct produit PROD;

struct Date{
int jour;
int mois;
int annee;

};
typedef struct Date DATEP;

struct Adresse{

int Numero;
char NomRue[30];
char Ville[30];
int CodePostal;
char Pays[30];

};
typedef struct Adresse ADRESSE;


struct FOURNISSEUR{
int code;
ADRESSE adr[MAX_SIZE_LIGNE_FILE];
long tel;
PROD tablistproduits[10];
int nbr_produit;
int nbr_adresse;
};
typedef struct FOURNISSEUR Fournisseur;

struct DETAIL_PRODUIT{

int Code;
float Prix;
float QteStq;
DATEP datelimite;

};
typedef struct DETAIL_PRODUIT Detail_Produit;

#endif
