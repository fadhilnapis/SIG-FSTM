package my.edu.kuis.fstm.sigandroidapp;

import android.content.Context;
import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.widget.ListView;
import android.widget.SimpleCursorAdapter;
import android.widget.Toast;

public class SecondActivity extends AppCompatActivity {


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_second);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);


        ContactDBHelper mDbHelper = new ContactDBHelper(this.getApplicationContext());
        final SQLiteDatabase db = mDbHelper.getWritableDatabase();

        FloatingActionButton fab = (FloatingActionButton) findViewById(R.id.fab);

        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        String[] listContact = {
                ContactDBHelper._ID,
                ContactDBHelper.COLUMN_USERNAME,
                ContactDBHelper.COLUMN_EMAIL,
                ContactDBHelper.COLUMN_PHONE
        };

        int[] insert = {
                R.id.id,
                R.id.name,
                R.id.emailAddress,
                R.id.phoneNumber
        };

        Cursor cursor = db.query(ContactDBHelper.TABLE_NAME, listContact, null, null, null, null, null);

        ListView list = (ListView) findViewById(R.id.listContact);
        SimpleCursorAdapter adapter = new SimpleCursorAdapter(this, R.layout.adapter, cursor, listContact,insert, 0);
        list.setAdapter(adapter);

        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                db.delete(ContactDBHelper.TABLE_NAME,null,null);
                Toast.makeText(SecondActivity.this, "All item deleted!",
                        Toast.LENGTH_SHORT).show();
                startActivity(new Intent(SecondActivity.this,MainActivity.class));
            }
        });
    }

}
