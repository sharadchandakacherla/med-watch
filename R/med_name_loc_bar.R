#!/usr/bin/env Rscript
a<-function(){
        args <- commandArgs(TRUE);
        n = args[1];
        myData<-read.csv("med.csv")
        df<-data.frame(myData,headers=TRUE)
        n<-as.numeric(as.character(n))
        x<-df[n,c(3,4,5,6)]
        print(x)
        e<-as.numeric(x)
        print(e)
        fname<-cbind(n,".png")
        library(stringr)
        fname<-str_c(fname, collapse = "")
        png(filename=fname,width=500,height=500)
        print(fname)
        barplot(e,names.arg=c("North","South","Central","West"),col="green")
        dev.off()
}
a()