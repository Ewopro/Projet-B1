
#ifndef GESTION_FOURNISSEUR_H
#define GESTION_FOURNISSEUR_H
#include "structutre_gestion_stock.h"

Fournisseur saisieFournisseur();
void afficher_Founisseur(int nb, Fournisseur*tabfouni);
void saisisListFounisseur(int nb, Fournisseur*tabfouni);
void tri_tab_Fournisseur(int nb,Fournisseur*tabfouni, int CHAMP_TRI, int TYPE_TRI);

#endif

