<?php
// File:    Client.cs
// Author:  WELLDONE
// Created: jeudi 17 novembre 2022 14:19:25
// Purpose: Definition of Class Client

class Client
{
   private int $clId;
   private string $clRegister;
   private string $clLastName;
   private string $clFirstName;
   private string $clLogin;
   private int $clPhoneNumber1;
   private int $clPhoneNumber2;
   private DateTime $clBirthDate;
   private string $clAddress;
   private string $clCity;
   private string $clTwitter;
   private string $clFacebook;
   private string $clInstagram;
   private string $clLindedin;
   private string $clWebSite;
   private DateTime $clCreateDate;
   private string $clStatus;
   private DateTime $clEditDate;


   /// <pdGenerated>Default Add</pdGenerated>
   public function AddProject($newProject)
   {
   }
   /// <pdGenerated>Default Remove</pdGenerated>
   public function RemoveProject($oldProject)
   {
   }
   /// <pdGenerated>Default removeAll</pdGenerated>
   public function RemoveAllProject()
   {
      // if (project != null)
      //    project . Clear();
   }
}
