#ifndef GESTION_PRODUITS_H
#define GESTION_PRODUITS_H
#include "structutre_gestion_stock.h"

PROD saisiePROD();
void afficher(int nb, PROD*tabprod);
void saisisListProduct(int nb, PROD*tabprod);
void tri_tab_produit(int nb,PROD* tabprod, int CHAMP_TRI, int TYPE_TRI);

#endif
