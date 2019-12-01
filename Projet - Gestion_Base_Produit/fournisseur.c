void afficher(int nb, Fournisseur*fournisseur)
{
    int i ;
    for(i=0; i<nb; i++)
    {
        printf("%s %d\n",tabfournisseur[i].code,tabfournisseur[i].adr,tabfournisseur.[i].tel,tabfournisseur[i].Tablistproduit);
    }
    printf("-----------\n");
}

void saisisFournisseur(int nb, Fournisseur*tabfournisseur)
{
    int i ;
    for(i=0; i<nb; i++)
    {
        tabfournisseur[i]=saisieFournisseur();
    }
}

Fournisseur saisieFournisseur()
{
    Fournisseur f;

    printf("introduire le code :");
    scanf("%d",f.code);
    printf("introduire l'adresse :");
    scanf("%",&f.adresse);
    printf("introduire le numéro de téléphone")
    scanf ("%",f.tel)

    return f;

}

void tri_tabFournisseur(int nb,Fournisseur* tabfournisseur, int CHAMP_TRI, int TYPE_TRI)
{
    int i;
    int min_index;
    int j ;
    Fournisseur temp;
    for(i=0 ; i< nb-1 ; i++)
    {
        min_index= i;
        for(j= i+1; j<nb ; j++)
        {
            if(CHAMP_TRI==CHAMP_TRI_ADRESSE)
            {
                if(TYPE_TRI==TRI_DECROISSANT)
                {
                    if(tabfournisseur[min_index].adr < tabfournisseur[j].prix)
                    {
                        min_index=j;
                    }
                }
                else if(TYPE_TRI==TRI_CROISSANT)
                {
                    if(tabfournisseur[min_index].prix > tabfournisseur[j].prix)
                    {
                        min_index=j;
                    }
                }
            }
            else if (CHAMP_TRI==CHAMP_TRI_NOM)
            {
                if(TYPE_TRI==TRI_CROISSANT)
                {
                    if(strcmp(tabfournisseur[min_index].nom,tabfournisseur[j].nom)>0)
                    {
                        min_index=j;
                    }
                }
                else if(TYPE_TRI==TRI_DECROISSANT)
                {
                    if(strcmp(tabfournisseur[min_index].nom,tabfournisseur[j].nom)<0)
                    {
                        min_index=j;
                    }
                }
            }
        }
        if(min_index!= i)
        {
            temp = tabfournisseur[i];
            tabfournisseur[i] = tabfournisseur[min_index];
            tabfournisseur[min_index]= temp;
        }
    }
}

