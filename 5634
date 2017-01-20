//
//  ViewController.swift
//  TipCalculator
//
//  Created by Tang,Philly H on 1/4/17.
//  Copyright © 2017 Tang,Philly H. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    @IBOutlet weak var billField: UITextField!

    @IBOutlet weak var tipControl: UISegmentedControl!
    @IBAction func onTap(sender: AnyObject) {
        //print("Hello")
        view.endEditing(true)
        
    }
    @IBAction func calculateTip(sender: AnyObject){
        let tipPercentages = [0.18,0.2,0.25]
        let bill = Double(billField.text!) ?? 0
        let tip = bill * tipPercentages[tipControl.selectedSegmentIndex]
        let total = bill + tip
        
        
        
        
        tipLabel.text = String(format: "$%.2f" , tip)
        totalLabel.text = String(format: "$%.2f" ,total)
        
    }
    @IBOutlet weak var totalLabel: UILabel!
    @IBOutlet weak var tipLabel: UILabel!
}

