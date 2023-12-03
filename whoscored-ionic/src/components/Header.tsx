import React from "react";
import {
  IonButtons,
  IonItem,
  IonLabel,
  IonContent,
  IonAccordion,
  IonHeader,
  IonMenu,
  IonAccordionGroup,
  IonButton,
  IonMenuButton,
  IonPage,
  IonTitle,
  IonToolbar,
} from "@ionic/react";
import Table from "./Table";
import { useEffect, useState } from "react";
function Header() {
  const [selectedMethod, setSelectedMethod] = useState("general");

  const handleButtonClick = (method) => {
    setSelectedMethod(method);
  };

  return (
    <>
      <IonMenu side="end" contentId="main-content">
        <IonHeader>
          <IonToolbar>
            <IonTitle>Statistiques</IonTitle>
          </IonToolbar>
        </IonHeader>
        <IonContent className="ion-padding">
          <IonAccordionGroup>
            <IonAccordion value="general">
              <IonItem slot="header" color="light">
                <IonLabel>General</IonLabel>
              </IonItem>
              <div className="ion-padding" slot="content">
              <IonButton onClick={() => handleButtonClick("general")}>General</IonButton>
              </div>
              <div className="ion-padding" slot="content">
              <IonButton onClick={() => handleButtonClick("generalDom")}>Domicile</IonButton>
              </div>
              <div className="ion-padding" slot="content">
              <IonButton onClick={() => handleButtonClick("generalExt")}>Exterieur</IonButton>
              </div>
            </IonAccordion>
            <IonAccordion value="attaque">
              <IonItem slot="header" color="light">
                <IonLabel>Attaque</IonLabel>
              </IonItem>
              <div className="ion-padding" slot="content">
              <IonButton onClick={() => handleButtonClick("attaque")}>General</IonButton>
              </div>
              <div className="ion-padding" slot="content">
              <IonButton onClick={() => handleButtonClick("attaqueDom")}>Domicile</IonButton>
              </div>
              <div className="ion-padding" slot="content">
              <IonButton onClick={() => handleButtonClick("attaqueExt")}>Exterieur</IonButton>
              </div>
            </IonAccordion>
            <IonAccordion value="defense">
              <IonItem slot="header" color="light">
                <IonLabel>Defense</IonLabel>
              </IonItem>
              <div className="ion-padding" slot="content">
              <IonButton onClick={() => handleButtonClick("defense")}>General</IonButton>
              </div>
              <div className="ion-padding" slot="content">
              <IonButton onClick={() => handleButtonClick("defenseDom")}>Domicile</IonButton>
              </div>
              <div className="ion-padding" slot="content">
              <IonButton onClick={() => handleButtonClick("defenseExt")}>Exterieur</IonButton>
              </div>
            </IonAccordion>
          </IonAccordionGroup>
        </IonContent>
      </IonMenu>
      <IonPage id="main-content">
        <IonHeader>
          <IonToolbar>
            <IonTitle>
              <span className="who">Who</span>
              <span className="scored">Scored</span>
            </IonTitle>
            <IonButtons slot="end">
              <IonMenuButton></IonMenuButton>
            </IonButtons>
          </IonToolbar>
        </IonHeader>
        <IonContent className="ion-padding">
          {console.log(selectedMethod)}
        <Table meth={selectedMethod} />
      </IonContent>
      </IonPage>
    </>
  );
}
export default Header;
