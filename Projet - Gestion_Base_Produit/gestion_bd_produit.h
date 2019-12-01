
#ifndef GESTION_BD_PRODUITS_H
#define GESTION_BD_PRODUITS_H

#include "structutre_gestion_stock.h"

void load_tabproduit_from_db(int * nb, PROD * tabprod);
void save_tabproduit_in_db(PROD * tabprod);

#endif
