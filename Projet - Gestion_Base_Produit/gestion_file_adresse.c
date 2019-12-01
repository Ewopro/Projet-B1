#include "gestion_adresse.h"
#include "structutre_gestion_stock.h"
#define TAILLE_MAX 1000

int readfileadresse(int argc, char *argv[])
{
    FILE* fichier = NULL;
    char chaine[TAILLE_MAX] = "";

    fichier = fopen("file_adresse.txt", "r");

    if (fichier != NULL)
    {
        while (fgets(chaine, TAILLE_MAX, fichier) != NULL) // On lit le fichier tant qu'on ne reçoit pas d'erreur (NULL)
        {
            printf("%s", chaine); // On affiche la chaîne qu'on vient de lire
        }

        fclose(fichier);
    }

    return 0;
}

void write_tabadresse_intfile(ADRESSE * tabadresse, int nb, char * nom_file)
{
    FILE* fp_write = NULL;
    int i;
    //*** to do
    fp_write= fopen(nom_file,"a");/**r:read ; w: write ; a : append*/
    if(!fp_write)
    {
        printf("Erreur de creation du fichier");
        exit(-1);
    }

    for(i = 0; i<nb; i++)
    {
        fprintf(fp_write,"%d %s %s %d %s\n",tabadresse[i].Numero,tabadresse[i].NomRue,tabadresse[i].Ville,tabadresse[i].CodePostal,tabadresse[i].Pays);
    }
    fclose(fp_write);

}

