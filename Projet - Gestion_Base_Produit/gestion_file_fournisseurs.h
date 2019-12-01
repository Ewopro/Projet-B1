
#ifndef GESTION_FILE_FOURNISSEUR_H
#define GESTION_FILE_FOURNISSEUR_H

#include "structutre_gestion_stock.h"

void read_tabfournisseur_fromfile(Fournisseur * tabfounisseur, char * nom_file);
void write_tabfournisseur_intfile(Fournisseur * tabfounisseur, int nb, char * nom_file);

#endif

