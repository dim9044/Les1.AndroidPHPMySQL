package ru.dima_n.androidphpmysql;

import android.support.v7.app.ActionBarActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends ActionBarActivity {

    private EditText id;
    private EditText name;
    private EditText surname;
    private EditText middlename;

    private String ids;
    private String names;
    private String surnames;
    private String middlenames;

    private zapros Zapros1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        id = (EditText)findViewById(R.id.editTextID);
        name = (EditText)findViewById(R.id.editTextName);
        surname = (EditText)findViewById(R.id.editTextSurname);
        middlename = (EditText)findViewById(R.id.editTextMiddlename);

    }

    public void OnClick(View view)
    {
        ids = id.getText().toString();
        Zapros1 = new zapros();
        Zapros1.start(ids);

        try
        {
            Zapros1.join();
        }catch (InterruptedException ie)
        {
            Log.e("pass 0 ", ie.getMessage());
        }

        names = Zapros1.resname();
        surnames = Zapros1.ressurname();
        middlenames = Zapros1.resmiddlename();

        name.setText(names);
        surname.setText(surnames);
        middlename.setText(middlenames);
    }
}
