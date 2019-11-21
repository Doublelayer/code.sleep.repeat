SOLID

S => Single Responsibility Prinzip
     - Hohe Kohäsion innerhalb der Klasse
     - Eine Klasse sollte nur genau eine Aufgabe erfüllen zu haben
     
O => Open Closed Prinzip
     - Klassen, Methoden und Module sollten so entwickelt werden das sie leicht zu erweitern sind
     - Erweiterungen sollten so möglich sein so dass ihr Verhalten nicht geändern wird
     - Das beste Beispiel ist hierfür die Vererbung. Hiebei wird das Verhalten der Klasse nicht
       verändert, erhöht aber die Funktionalität der Software

L => Liskovsches Substitutionsprinzip
     - Subklasse muss immer alle Eigenschaften der Superklasse erfüllen und durch die Superklasse
       jederzeit ersetzbar sein
     - Eine Subklasse darf somit Erweiterungen enthalten, aber keine grundlengende Änderungen

D => Dependency Inversion Prinzip
     - Module höherer Ebene sollten nicht von Modulen niedriger Ebene Abhängig sein
     - Vielmehr sollten beide von Abstraktionen abhängen
     - Vermeidung von Zyklischen Abhängigkeiten

     Beispiel 1 (Verletzt das Prinzip):

     class Chef
     {
        private Mitarbeiter ma;
        
        public Chef(Mitarbeiter ma)
        {
            this.ma = ma;
        }
        
        public void delegiere(){
            this.ma.arbeite();
        }
     }
        
     class Mitarbeiter 
     {
    	public void arbeite()
	{
           System.out.println("Ja ich fange an...");
    	}
     }

###############################################################

	Beispiel 2 (Verletzt NICHT das Prinzip):
	
	interface Arbeiter
	{
    		public void arbeite();
	}

	class Chef
	{
        	public void delegiere(Arbeiter ar)
	        {
            		ar.arbeite();
	        }
	}
        
	class Mitarbeiterin implements Arbeiter
	{
	    public void arbeite()
	    {
        	System.out.println("Mitarbeiterin: Ja ich fange an...");
    	    }
	}

	class Mitarbeiter implements Arbeiter
	{
    		public void arbeite()
    		{
        	   System.out.println("Mitarbeiter: Ja ich fange an...");
	       }
	}
