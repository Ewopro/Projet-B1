#include "gestion_produits.h"

void afficher(int nb, PROD*tabprod)
{
    int i ;
    for(i=0; i<nb; i++)
    {
        printf("%s %d\n",tabprod[i].nom,tabprod[i].prix);
    }
    printf("-----------\n");
}

void saisisListProduct(int nb, PROD*tabprod)
{
    int i ;
    for(i=0; i<nb; i++)
    {
        tabprod[i]=saisiePROD();
    }
}

PROD saisiePROD()
{
    PROD p;

    printf("introduire le nom :");
    scanf("%s",p.nom);
    printf("introduire le prix :");
    scanf("%d",&p.prix);

    return p;

}

void tri_tab_produit(int nb,PROD* tabprod, int CHAMP_TRI, int TYPE_TRI)
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
            if(CHAMP_TRI==CHAMP_TRI_PRIX)
            {
                if(TYPE_TRI==TRI_DECROISSANT)
                {
                    if(tabprod[min_index].prix < tabprod[j].prix)
                    {
                        min_index=j;
                    }
                }
                else if(TYPE_TRI==TRI_CROISSANT)
                {
                    if(tabprod[min_index].prix > tabprod[j].prix)
                    {
                        min_index=j;
                    }
                }
            }
            else if (CHAMP_TRI==CHAMP_TRI_NOM)
            {
                if(TYPE_TRI==TRI_CROISSANT)
                {
                    if(strcmp(tabprod[min_index].nom,tabprod[j].nom)>0)
                    {
                        min_index=j;
                    }
                }
                else if(TYPE_TRI==TRI_DECROISSANT)
                {
                    if(strcmp(tabprod[min_index].nom,tabprod[j].nom)<0)
                    {
                        min_index=j;
                    }
                }
            }
        }
        if(min_index!= i)
        {
            temp = tabprod[i];
            tabprod[i] = tabprod[min_index];
            tabprod[min_index]= temp;
        }
    }
}
