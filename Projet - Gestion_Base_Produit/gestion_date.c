#include "gestion_date.h"

void afficher_date(int nb, DATEP*tabdate)
{
    int i ;
    for(i=0; i<nb; i++)
    {
        printf("%d %d %d\n",tabdate[i].jour,tabdate[i].mois,tabdate[i].annee);
    }
    printf("-----------\n");
}

void saisisListDate(int nb, DATEP*tabdate)
{
    int i ;
    for(i=0; i<nb; i++)
    {
        tabdate[i]=saisieDATEP();
    }
}

DATEP saisieDATEP()
{
    DATEP d;

    printf("introduire le jour :");
    scanf("%d",&d.jour);
    printf("introduire le mois :");
    scanf("%d",&d.mois);
    printf("introduire l'année:");
    scanf("%d",&d.annee);

    return d;

}

   void tri_tab_date(int nb,DATEP* tabdate, int CHAMP_TRI, int TYPE_TRI)
{
    int i;
    int min_index;
    int j ;
    DATEP temp;
    for(i=0 ; i< nb-1 ; i++)
    {
        min_index= i;
        for(j= i+1; j<nb ; j++)
        {
            if(CHAMP_TRI==CHAMP_TRI_JOUR)
            {
                if(TYPE_TRI==TRI_DECROISSANT)
                {
                    if(tabdate[min_index].jour < tabdate[j].jour)
                    {
                        min_index=j;
                    }
                }
                else if(TYPE_TRI==TRI_CROISSANT)
                {
                    if(tabdate[min_index].jour > tabdate[j].jour)
                    {
                        min_index=j;
                    }
                }
            }
            else if (CHAMP_TRI==CHAMP_TRI_MOIS)
            {
                if(TYPE_TRI==TRI_CROISSANT)
                {
                    if(tabdate[min_index].mois < tabdate[j].mois)
                        min_index=j;
                    }
                }
                else if(TYPE_TRI==TRI_DECROISSANT)
                {
                    if(tabdate[min_index].mois < tabdate[j].mois)
                    {
                        min_index=j;
                    }
                }
            }
        }
        if(min_index!= i)
        {
            temp = tabdate[i];
            tabdate[i] = tabdate[min_index];
            tabdate[min_index]= temp;
        }
    }

