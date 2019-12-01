#ifndef GESTION_DATE_H
#define GESTION_DATE_H
#include "structutre_gestion_stock.h"

DATEP saisieDATEP();
void afficher_date(int nb, DATEP*tabdate);
void saisisListDate(int nb, DATEP*tabdate);
void tri_tab_Date(int nb,DATEP* tabdate, int CHAMP_TRI, int TYPE_TRI);

#endif
