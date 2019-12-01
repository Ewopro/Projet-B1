#include gestion_produits.h

void afficher(int nb, DATE*tabdate)
{
    int i ;
    for(i=0; i<nb; i++)
    {
        printf("%s %d\n",tabdate[i].jour,tabdate[i].mois,tabdate[i].année);
    }
    printf("-----------\n");
}

void saisieDate(int nb, DATE*tabdate)
{
    int i ;
    for(i=0; i<nb; i++)
    {
        tabDATE[i]=saisieDATE();
    }
}

DATE saisieDATE()
{
    DATE d;

    printf("introduire le jour :");
    scanf("%d",d.jour);
    printf("introduire le mois :");
    scanf("%d",&d.mois);
    printf("introduire l'année:");
    scanf("%d",d.année);

    return d;
}

    void tri_tab_date(int nb,DATE* tabdate, int CHAMP_TRI, int TYPE_TRI)
{
    int i;
    int min_index;
    int j ;
    PROD temp;
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


