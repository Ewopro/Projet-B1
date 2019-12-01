
#ifndef GESTION_DETAIL_PRODUITS_H
#define GESTION_DETAIL_PRODUITS_H

#include "structutre_gestion_stock.h"

Detail_Produit saisieDetailProd();
void afficher_Detail_Produit(int nb, Detail_Produit*tabdetailProd);
void saisisList_Detail_Produit(int nb, Detail_Produit*tabdetailProd);
void tri_tab__Detail_Produit(int nb,Detail_Produit*tabdetailProd, int CHAMP_TRI, int TYPE_TRI);
#endif
