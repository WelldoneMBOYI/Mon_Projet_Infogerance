<?php
// File:    Assistance.cs
// Author:  WELLDONE
// Created: jeudi 17 novembre 2022 14:19:25
// Purpose: Definition of Class Assistance

class Assistance
{
   private int $asId;
   private DateTime $asEndHour;
   private DateTime $asStartHour;
   private string $asStatus;
   private string $asUserName;
   private DateTime $asCreateDate;
   private $raport;
   private $assistance;

   /// <pdGenerated>Default Add</pdGenerated>
   public function AddRaport($newRaport)
   {
   }
   /// <pdGenerated>Default Remove</pdGenerated>
   public function RemoveRaport($oldRaport)
   {
   }
   /// <pdGenerated>Default removeAll</pdGenerated>
   public function RemoveAllRaport()
   {
   }

   // Les methodes sur Assistance ou intervention
   public function AddAssistance(Assistance $newAssistance)
   {
   }

   /// <pdGenerated>Default removeAll</pdGenerated>
   public function RemoveAllAssistance()
   {
   }
}
