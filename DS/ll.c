#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node* next;
}  *head,*temp;
struct node* create()   //to create a new node in likedlist
{
    struct node* new_node=(struct node*)malloc(sizeof(struct node));
    if(!new_node)
    {
        printf("\n memory allocation failed! liked list overflow");
        return NULL;
    }
    return new_node;
    
}
void insert_beg()
{
    int d;
    printf("enter the element to insert");
    scanf("%d",&d);
    struct node* new=create();
    new->data=d;
    new->next=head;
    head=new;

}
void insertPos()
{
    int d,pos,i=2,j;
    printf("enter the data to be inserted: ");
    scanf("%d",&d);
    printf("enter the possition to insert: ");
    scanf("%d",&pos);
    temp=head;
    j=0;
    while(temp!=NULL)
    {
        temp=temp->next;
        j++;

    }
    if(pos<=0)
    {
        printf("inavalid postion");
        return;
    }
    struct node* new=create();
    new->data=d;
    if(head==NULL || pos==1)
    {
        new->next=head;
         head=new;
         return;
    }
    temp=head;
    while(i<pos)
    {
        temp=temp->next;
        i++;
    }
    new->next=temp->next;
    temp->next=new;
}
void insertend()
{
    int d;
    printf("entee the data to be inserted: ");
    scanf("%d",&d);
    struct node* new=create();
    new->data=d;
    new->next=NULL;
    if(head==NULL)
    {
        head=new;
        return;
    }
    temp=head;
    while(temp->next!=NULL)
    {
        temp=temp->next;

    }
    temp->next=new;
}
void delete_beg()
{
    int d;
    if(head==NULL)
    {
        printf("linked list is empty");
        return;
    }
    d=head->data;
    temp=head;
    head=head->next;
    free(temp);
    printf("\n %d deleted",d);

}
void delete_pos()
{
    int pos,d,i,j;
    struct node* del;
    printf("enter the position to be deleted: ");
    scanf("%d",&pos);
    j=0;
    temp=head;
    while(temp!=NULL)
    {
        temp=temp->next;
        j++;
    }
    if(pos<=0)
    {
        printf("invalid position");
        return;
    }
    if(head==NULL)
    {
        printf("linkedlist is empty");
        return;
    }
    i=2;
    del=head;
    while(i<=pos)
    {
        temp=del;
        del=temp->next;
        i++;
    }
    d=del->data;
    if(pos==1)
    {
        head=del->next;
    }
        else
          temp->next=head->next;
        free(del);
        printf("\n %d deleted ",d);
    }
    void delete_end()
    {
        int d;
        struct node* del=head;
        temp=head;
        if(head==NULL)
        {
            printf("linkedlist is empty");
            return;
        }
        if(temp->next!=NULL)
        {
            while((temp->next)->next!=NULL)
            temp=temp->next;
            del=temp->next;
        }
        else
        head=NULL;
        d=del->data;
        temp->next=NULL;
        free(del);
        printf("%d is deleted.",d);
    }
    void search()
    {
        int d;
        printf("enter the elementg to be search:");
        scanf("%d",&d);
        temp=head;
        while(temp!=NULL)
        {
            if(temp->data==d)
            {
                printf("%d is presented in linkedlist",d);
                return;

            }
            temp=temp->next;
        }
        if(temp==NULL)
        {
            printf("%d is not presented in likedlist",d);
        }
    }
        void display()
        {
            if(head==NULL)
            {
                printf("empty");
            }
            else
            {
                temp=head;
                while(temp!=NULL)
                {
                    printf("%d",temp->data);
                    temp=temp->next;
                }
            }
        }
        void main()
        {
            int ch;
            while(1)
            {
            printf("\n1.insert at beg \n2.insert at middle \n3.insert at end  \n4.delete at beg \n5.delete at middle \n6.deletee at end \n7.display \n8.search \n9.exit");
            printf("enter your choice: ");
            scanf("%d",&ch);
            if(ch==9)
            {
               return;
            
            }
            switch(ch)
            {
                case 1:
                insert_beg();
                break;

                case 2:
                insertPos();
                break;

                case 3:
                insertend();
                break;

                case 4:
                delete_beg();
                break;

                case 5:
                delete_pos();
                break;

                case 6:
                delete_end();
                break;

                case 7:
                display();
                break;

                case 8:
                search();
                break;
                
                default:printf("wrong choice");


                }

            }
        }
    

    
